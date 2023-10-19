<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $Customer = User::join('customers', 'users.id', '=', 'customers.id')
         ->get(['users.id', 'users.name', 'users.email', 'customers.address', 'customers.state', 'customers.country','customers.phone_number']);
        // $Customer = Customer :: all();
        return view('admin.StudentData', compact('Customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Customer.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $customers = new Customer;
        $users = new User;
        $users->id = $request->id;
        $users->password = $request->password;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->save();

        $customers->email = 'jp@gmail.com';
        $customers->address = $request->address;
        $customers->state = $request->state;
        $customers->country = $request->country;
        $customers->phone_number = $request->phone;
        $customers->save();

        $request->validate([
            'name' => 'required|max:255',
            'state' => 'required|max:255',
        ]);

        return redirect('admin/studentData')->with('success','Form has been submitted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $data = Customer::onlyTrashed()->paginate(10);
        return view('admin/trash', compact('data'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = User::join('customers', 'users.id', '=', 'customers.id')->find($id);
        return view('admin/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Customer::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        $data->state = $request->input('state');
        $data->country = $request->input('country');
        $data->phone_number = $request->input('phone_number');
        $data->update();
        return redirect('admin/studentData');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Customer::find($id);
        $data->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
    }

    public function restoreTrash($id) 
    {

        $data = Customer::withTrashed()->findOrFail($id);

        $data->restore();

        return redirect('admin/studentData')->with('success', 'You successfully restored the Data');
    }

    public function deletePermanent($id) 

    {

        $data = Customer::withTrashed()->findOrFail($id);

        $data->forceDelete();

        return redirect()->back()->with('success', 'The Data is deleted permanently');
    }
}
