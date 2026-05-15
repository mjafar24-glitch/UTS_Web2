<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="text-end">
        <a href="{{ route('index') }}" class="btn btn-warning mb-2" role="button" >Back</a>
    </div>
    {{-- Order --}}
        <ul class="list-group">
            <h3 class="text-center">Detail Orderan</h3>
            <li class="list-group-item">Nama : {{ $order->nama_produk }}</li>
            <li class="list-group-item">Jumlah : {{ $order->jumlah }}</li>
            <li class="list-group-item">Total Harga : {{ $order->total_harga }}</li>
            <li class="list-group-item">Status : {{ $order->status }}</li>
            <li class="list-group-item">Pembayaran : {{ $order->pembayaran }}</li>
            <li class="list-group-item">Pengiriman : {{ $order->pengiriman }}</li>
            <li class="list-group-item">Catatan Pesanan : {{ $order->catatan_pesanan }}</li>
            <li class="list-group-item">Created At: {{ $order->created_at->diffForHumans() }}</li>
            <li class="list-group-item">Last Update: {{ $order->updated_at->diffForHumans() }}</li>
        </ul>
</x-app>