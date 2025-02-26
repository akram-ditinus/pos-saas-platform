<?php

namespace App\Http\Controllers\RestaurantOwner;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        /** getting order number */
        $orderNo = 1;
        $orders = \App\Models\Order::latest()->limit(1)->first();

        /** getting subscripton details */
        $subscription = \App\Models\SubscriptionPlan::where('uid', $request->subscription_plan_id)->first();


        /** getting tax details */
        $taxAmount=0.00;
        $subTotal = $subscription->sale_price ?? $subscription->price;
        $tax=\App\Models\Tax::where('uid',$subscription->tax_id)->first();
        if(!empty($tax->percentage)){
            $taxAmount=$tax->percentage*$subTotal/100;
        }

        /** getting coupon details */
        $couponId = null;
        $couponDiscountAmount = 0;
        if (!empty($request->coupon_code)) {
            $coupon = \App\Models\Coupon::where('code', $request->coupon_code)->first();
            if ($coupon->amount > 0) {
                $couponId = $coupon->uid;
                if($coupon->type=="percentage"){
                    $couponDiscountAmount=$subTotal*$coupon->amount/100;
                }
                if($coupon->type=="flat"){
                    $couponDiscountAmount=(float)$coupon->amount;
                }
            }
        }

        /** getting subscription dates */
        $startDate=date('Y-m-d'); 
        $trialPreiodEndsAt=null;
        $daysToGo=$subscription->trial_period_in_days+$subscription->duration_in_days;
        $endDate = date('Y-m-d', strtotime($startDate . ' + '.$daysToGo.' days'));
        if($subscription->trial_period_in_days>0){
            $trialPreiodEndsAt= date('Y-m-d', strtotime($startDate . ' + '.$subscription->trial_period_in_days.' days'));
        }
        
        // dd($couponDiscountAmount);
        if (!empty($orders->order_no)) {
            $orderNo = $orders->order_no + 1;
        }
        $order = new \App\Models\Order();

        $order->uid = getRandomCharactor(12, modelName: 'Order');
        $order->order_no = $orderNo;
        $order->restaurant_owner_id = auth()->user()->uuid;
        $order->subscription_plan_id = $request->subscription_plan_id;
        $order->coupon_id = $couponId;
        $order->coupon_discount=$couponDiscountAmount;
        $order->tax_id=$subscription->tax_id;
        $order->tax_amount=$taxAmount;
        $order->sub_total=(float)$subTotal;
        $order->net_amount=$order->sub_total-$order->coupon_discount+$order->tax_amount;
        $order->trial_period_end_at=$trialPreiodEndsAt;
        $order->start_date=$startDate;
        $order->end_date=$endDate;
        $order->status='completed';
        $order->payment_status='paid';
        $order->save();
        return redirect()->route('restaurant.owner.subscriptions.index')->with('success','Plan perchanse successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
