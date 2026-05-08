<x-app>
<x-slot:title>{{ $title }}</x-slot:title>
 <div class="card shadow p-4">
    <h3 class="text-center mb-4 fw-bold">Tambah Order</h3>
<form>
  <div class="mb-3">
    <label for="text" class="form-label fs-6">Nama Produk</label>
    <input type="text" class="form-control" id="text" name="nama_produk" >
  </div>
  <div class="mb-3">
    <label for="number" class="form-label fs-6">Jumlah</label>
    <input type="number" class="form-control" id="number" name="jumlah" >
  </div>
  <div class="mb-3">
    <label for="number" class="form-label fs-6">Total Harga</label>
    <input type="number" class="form-control" id="number" name="total_harga" >
  </div>
  <div class="mb-3">
    <label for="text" class="form-label fs-6">Status</label>
    <input type="text" class="form-control" id="text" name="status" >
  <div class="mb-3">
    <label for="text" class="form-label fs-6">Pembayaran</label>
    <input type="text" class="form-control" id="text" name="pembayaran" >
   
  </div>
  <div class="mb-3">
    <label for="text" class="form-label fs-6">Pengiriman</label>
    <input type="text" class="form-control" id="text" name="pengiriman" >
   
  </div>
 
  <button type="submit" class="btn btn-primary">Kirim </button>
  <a href="#" class="btn btn-warning" type="button">Batal</a>
</form>
 </div>
</x-app>