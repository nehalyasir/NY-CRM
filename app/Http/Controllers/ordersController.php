<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordersController extends Controller
{
    public function CreateSalesOrders()
    {
        return view('orders.salesorder');
    }

    // public function ViewSalesOrders()
    // {
    //     return view('orders.viewsalesorder');
    // }

    public function CreateSalesInvoice()
    {
        return view('orders.salesinv');
    }

    // public function ViewSalesInvoice()
    // {
    //     return view('orders.viewsalesinv');
    // }


    public function CreatePurchaseOrder()
    {
        return view('orders.purchaseorder');
    }

    // public function ViewPurchaseOrder()
    // {
    //     return view('orders.viewpurchaseorder');
    // }

    public function CreatePurchaseInvoice()
    {
        return view('orders.purchaseinv');
    }

    // public function ViewPurchaseInvoice()
    // {
    //     return view('orders.viewpurchaseinv');
    // }

}
