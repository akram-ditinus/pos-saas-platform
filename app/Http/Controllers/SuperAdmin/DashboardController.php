<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Fakers\Ecommerce;
use App\Fakers\Transactions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function dashboard()
    {
        return view('super_admin.dashboard',[
            'ecommerce' => Ecommerce::fakePerformanceInsights(),
            'transactions' => Transactions::fakeTransactions(),
        ]);
    }
}
