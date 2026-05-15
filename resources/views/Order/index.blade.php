<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
     @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    <div class="text-end">
        <a href="{{ route('order.create') }}" class="btn btn-primary mb-2" role="button" >Tambah Data</a>
    </div>
    <form action="">
        <div class="row g-3 mb-3 align-items-end">
            <div class="col-md-4">
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Search.." >
            </div>
            <div class="col-md-4">
                <select name="customer" class="form-control">
                    <option value="">--Pilih Status--</option>
                    <option value="pending" {{ request('customer') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="proses" {{ request('customer') == 'proses' ? 'selected' : '' }}>Proses</option>
                    <option value="selesai" {{ request('customer') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="batal" {{ request('customer') == 'batal' ? 'selected' : '' }}>Batal</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </form>
    <div class=" container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white text-center">
                <h3>Data Order</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class ="table table-bordered table-hover align-middle">
                        <thead class="table-primary text-center fs-5">
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Status</th>
                                <th>Pembayaran</th>
                                <th>Pengiriman</th>
                                <th>Catatan Pesanan</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>
                        <tbody class="text-center fs-5 fw-normal">
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->nama_produk }}</td>
                                    <td>{{ $order->jumlah }}</td>
                                    <td>{{ $order->total_harga }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->pembayaran }}</td>
                                    <td>{{ $order->pengiriman }}</td>
                                    <td>{{ $order->catatan_pesanan }}</td>
                                    <td>
                                        <a href="{{ route('order.show', $order->id)}}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('order.destroy', $order->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>                 
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                            
                    </table>

                </div>

            </div>
           
        </div>
    </div>
    {{ $orders->links() }}
</x-app>