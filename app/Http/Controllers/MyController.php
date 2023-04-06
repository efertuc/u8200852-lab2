<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

use Illuminate\Contracts\View\View;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    public function show($id): View|string
    {
        $customer = Customer::where('id', $id)->with('addressu')->get()->first();

        if ($customer != null) {
            return view('customer')->with('customer_u', $customer);
        } else
            return "Customer not found";
    }

    public function filter(Request $request): View
    {
        $filters = [
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'blocked' => $request->get('blocked')
        ];

        if ($filters['blocked'] == "null") {
            $customersToShow = Customer::where('phone', 'like', "%{$filters['phone']}%")
                ->where('email', 'like', "%{$filters['email']}%")
                ->where(DB::raw("concat(\"name\", ' ',\"surname\")"), 'like', "%{$filters['name']}%")
                ->paginate(10);
        } else {
            $isBlockedBool = $filters['blocked'] == "true";

            $customersToShow = Customer::where('phone', 'like', "%{$filters['phone']}%")
                ->where('email', 'like', "%{$filters['email']}%")
                ->where('blocked', $isBlockedBool)
                ->where(DB::raw("concat(\"name\", ' ',\"surname\")"), 'like', "%{$filters['name']}%")
                ->paginate(10);
        }

        $customersToShow->appends($request->except('page'));

        return view('customers')->with('customers', $customersToShow);
    }
}
