<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest();
        $keyword = request('keyword');
        if($keyword) {
            $orders->where('nama_produk', 'like', '%' . $keyword . '%');
        }
        $status = request('customer');
        if($status) {
            $orders->where('status', $status);
        }

        return view('Order.index',[
            'title' => 'Order',
            'customers' => Customer::latest()->get(),
            'orders' => $orders->paginate(5)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Order.create',[
            'title' => 'Tambah Orderan',
            'customers' => Customer::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'customer_id' => 'required',
            'nama_produk' => 'required|max:255',
            'jumlah' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'status' => 'required|max:255',
            'pembayaran' => 'required|max:255',
            'pengiriman' => 'required|max:255',
            'catatan_pesanan' => 'nullable|max:255',


        ], [
            'customer_id.required' => 'Customer wajib diisi',
            'nama_produk.required' => 'Nama produk wajib diisi',
            'nama_produk.max' => 'Nama produk maksimal 255 karakter',
            'jumlah.required' => 'Jumlah wajib diisi',
            'total_harga.required' => 'Total harga wajib diisi',
            'total_harga.numeric' => 'Total harga harus berupa angka',
            'status.required' => 'Status wajib diisi',
            'status.max' => 'Status maksimal 255 karakter',
            'pembayaran.required' => 'Pembayaran wajib diisi',
            'pembayaran.max' => 'Pembayaran maksimal 255 karakter',
            'pengiriman.required' => 'Pengiriman wajib diisi',
            'pengiriman.max' => 'Pengiriman maksimal 255 karakter',
            'catatan_pesanan.max' => 'Catatan pesanan maksimal 255 karakter',
        ]);
       
        try {
            DB::beginTransaction();
            $order =Order::create($validated);
            DB::commit();
            return to_route('order.index')->withSuccess('Order berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return back('order.create')->withErrors('Ada Kesalahan saat menyimpan data silahkan coba lagi');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
         return view('Order.show',[
            'title' => 'Detail Orderan',
            'order' => $order,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
         return view('Order.edit',[
            'title' => 'Edit Orderan',
            'customers' => Customer::latest()->get(),
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
          $validated = $request->validate([
            'customer_id' => 'required',
            'nama_produk' => 'required|max:255',
            'jumlah' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'status' => 'required|max:255',
            'pembayaran' => 'required|max:255',
            'pengiriman' => 'required|max:255',
            'catatan_pesanan' => 'nullable|max:255',


        ], [
            'customer_id.required' => 'Customer wajib diisi',
            'nama_produk.required' => 'Nama produk wajib diisi',
            'nama_produk.max' => 'Nama produk maksimal 255 karakter',
            'jumlah.required' => 'Jumlah wajib diisi',
            'total_harga.required' => 'Total harga wajib diisi',
            'total_harga.numeric' => 'Total harga harus berupa angka',
            'status.required' => 'Status wajib diisi',
            'status.max' => 'Status maksimal 255 karakter',
            'pembayaran.required' => 'Pembayaran wajib diisi',
            'pembayaran.max' => 'Pembayaran maksimal 255 karakter',
            'pengiriman.required' => 'Pengiriman wajib diisi',
            'pengiriman.max' => 'Pengiriman maksimal 255 karakter',
            'catatan_pesanan.max' => 'Catatan pesanan maksimal 255 karakter',
            
        ]);
        $order->update($validated);
        return to_route('order.index')->withSuccess('Order berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
          $order->delete($order);
        return to_route('order.index')->withSuccess('Order berhasil dihapus');
    }
}