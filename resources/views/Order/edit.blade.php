<x-app>
<x-slot:title>{{ $title }}</x-slot:title>

 <div class="card shadow p-4">
    <h3 class="text-center mb-4">Edit Orderan</h3>
<form method="POST" action="{{ route('order.update', $order) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="customer_id" class="form-label fs-6">Customer</label>
      <select name="customer_id" class="form-control @error('customer_id') is-invalid @enderror">
        <option value="">Pilih Customer</option>
        @foreach($customers as $customer)
          <option value="{{ $customer->id }}" {{ old('customer_id',$order->customer_id) == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
        @endforeach 
      </select>

    </div>
    <div class="mb-3">
      <label for="number" class="form-label fs-6">Nama Produk</label>
      <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="number" name="nama_produk" value="{{ old('nama_produk',$order->nama_produk) }}" >
      @error('nama_produk')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
  <div class="mb-3">
    <label for="number" class="form-label fs-6">Jumlah</label>
    <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="number" name="jumlah" value="{{ old('jumlah',$order->jumlah) }}">
    @error('jumlah')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
  </div>
  <div class="mb-3">
    <label for="number" class="form-label fs-6">Total Harga</label>
    <input type="number" class="form-control @error('total_harga') is-invalid @enderror" id="number" name="total_harga" value="{{ old('total_harga',$order->total_harga) }}" >
    @error('total_harga')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
  </div>
  <div class="mb-3">
    <select name="status" class="form-control @error('status')is-invalid @enderror">
        <option value="">--Pilih Status--</option>
        <option value="pending" {{ old('status',$order->status) == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="proses" {{ old('status',$order->status) == 'proses' ? 'selected' : '' }}>Proses</option>
        <option value="selesai" {{ old('status',$order->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
        <option value="batal" {{ old('status',$order->status) == 'batal' ? 'selected' : '' }}>Batal</option>
    </select>
    @error('status')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
  </div>
  <div class="mb-3">
   <select name="pembayaran" class="form-control @error('pembayaran') is-invalid @enderror">
        <option value="">-Pilih Pembayaran-</option>
        <option value="cash" {{ old('pembayaran',$order->pembayaran) == 'cash' ? 'selected' : '' }}>Cash</option>
        <option value="credit_card" {{ old('pembayaran',$order->pembayaran) == 'credit_card' ? 'selected' : '' }}>Credit Card</option>
        <option value="bank_transfer" {{ old('pembayaran',$order->pembayaran) == 'bank_transfer' ? 'selected' : '' }}>Bank Transfer</option>
    </select>
    @error('pembayaran')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <select name="pengiriman" class="form-control @error('pengiriman') is-invalid @enderror">
        <option value="">-Pilih Pengiriman-</option>
        <option value="reguler" {{ old('pengiriman',$order->pengiriman) == 'reguler' ? 'selected' : '' }}>Reguler</option>
        <option value="express" {{ old('pengiriman',$order->pengiriman) == 'express' ? 'selected' : '' }}>Express</option>
        <option value="instant" {{ old('pengiriman',$order->pengiriman) == 'instant' ? 'selected' : '' }}>Instant</option>
    </select>
    @error('pengiriman')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
      <label for="text" class="form-label fs-6">Catatan Pesanan</label>
      <input type="text" class="form-control @error('catatan_pesanan') is-invalid @enderror" id="number" name="catatan_pesanan" value="{{ old('catatan_pesanan',$order->catatan_pesanan) }}" >
      @error('catatan_pesanan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

  <button type="submit" class="btn btn-primary">Kirim </button>
  <a href="{{ route('order.index') }}" class="btn btn-warning" type="button">Batal</a>
</form>
 </div>
</x-app>