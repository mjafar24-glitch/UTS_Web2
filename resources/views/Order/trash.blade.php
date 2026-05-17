<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
     @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

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

                                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                        <form action="{{ route('order.restore', $order->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-warning btn-sm" onclick="return confirm('Apakah Anda yakin ingin mengembalikan data ini?')">Restore</button>
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
</x-app>
