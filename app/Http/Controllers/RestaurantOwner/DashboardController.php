<?php
namespace App\Http\Controllers\RestaurantOwner;


use App\Http\Controllers\Controller;
use App\Fakers\Ecommerce;
use App\Fakers\Transactions;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view("restaurant_owner.dashboard", [
            'ecommerce' => Ecommerce::fakePerformanceInsights(),
            'transactions' => Transactions::fakeTransactions(),
        ]);
    }

}
