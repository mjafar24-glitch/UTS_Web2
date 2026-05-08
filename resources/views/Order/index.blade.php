<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="text-end">
        <a href="#" class="btn btn-primary mb-2" role="button" >Tambah Data</a>
    </div>
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
                                </tr>
                                @endforeach
                        </tbody>
                        
                    </table>

                </div>

            </div>
           
        </div>
    </div>
</x-app>