<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::latest();
        $keyword = request('keyword');
        if ($keyword) {
            $customers->where('name', 'like', '%'. $keyword.'%');
        }
        return view('Customer.index',[
            'title' => 'Customer',
            'customers' => $customers->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Customer.create',[
            'title' => 'Tambah Customer',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|digits:12|numeric',
            'status' => 'required|max:255',


        ], [
            'name.required' => 'Nama wajib diisi',
            'name.max' => 'Nama maksimal 255 karakter',
            'alamat.required' => 'Alamat wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'no_hp.required' => 'No_hp wajib diisi',
            'no_hp.digits' => 'No_hp harus 12 digit',
            'no_hp.numeric' => 'No_hp harus berupa angka',
            'status.required' => 'Status wajib diisi',
            'status.max' => 'Status maksimal 255 karakter',
        ]);
        Customer::create($validated);
        return to_route('index')->withSuccess('Customer berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('Customer.edit',[
            'title' => 'Edit Customer', 
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
           $validated = $request->validate([
            'name' => 'required|max:255',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|digits:12|numeric',
            'status' => 'required|max:255',


        ], [
            'name.required' => 'Nama wajib diisi',
            'name.max' => 'Nama maksimal 255 karakter',
            'alamat.required' => 'Alamat wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'no_hp.required' => 'No_hp wajib diisi',
            'no_hp.digits' => 'No_hp harus 12 digit',
            'no_hp.numeric' => 'No_hp harus berupa angka',
            'status.required' => 'Status wajib diisi',
            'status.max' => 'Status maksimal 255 karakter',
        ]);
        $customer->update($validated);
        return to_route('index')->withSuccess('Customer berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete($customer);
        return to_route('index')->withSuccess('Customer berhasil dihapus');
    }
}