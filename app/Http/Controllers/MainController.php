<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Address;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductImage;
use Carbon\Carbon;
use Redirect;
use URL;
// Admin 1
// preper 2
// customer 3
// Driver 4
class MainController extends Controller
{


    public function orders()
    {
        $var = null;
        $compacts = compact('var');
        return view('admin.orders', $compacts);
    }


    public function customers()
    {
        $var = null;
        $compacts = compact('var');
        return view('admin.customers', $compacts);
    }



    public function preppers()
    {
        $var = null;
        $compacts = compact('var');
        return view('admin.preppers', $compacts);
    }


    public function drivers()
    {
        $var = null;
        $compacts = compact('var');
        return view('admin.drivers', $compacts);
    }



    public function menu()
    {
        $var = null;
        $compacts = compact('var');
        return view('admin.menu', $compacts);
    }



    public function paymentsPreppers()
    {
        $var = null;
        $compacts = compact('var');
        return view('admin.paymentsPreppers', $compacts);
    }

    public function paymentsDrivers()
    {
        $var = null;
        $compacts = compact('var');
        return view('admin.paymentsDrivers', $compacts);
    }


    public function revenuePreppers()
    {
        $var = null;
        $compacts = compact('var');
        return view('admin.revenuePreppers', $compacts);
    }


    public function revenueDrivers()
    {
        $var = null;
        $compacts = compact('var');
        return view('admin.revenueDrivers', $compacts);
    }

    public function revenueOrders()
    {
        $var = null;
        $compacts = compact('var');
        return view('admin.revenueOrders', $compacts);
    }





    public function block_rider($id, $status)
    {
        // return $status;
        $rider = User::find($id);
        $rider->status = $status;
        if($rider->save())
        {
            if ($status == 1) {
                return Redirect::back()->with('msg', 'Unblocked Successfully');
            }else{
                return Redirect::back()->with('msg', 'Blocked Successfully');
            }

        }
    }
}
