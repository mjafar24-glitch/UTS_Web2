<x-app>
<x-slot:title>{{ $title }}</x-slot:title>
 <div class="card shadow p-4">
    <h3 class="text-center mb-4">Tambah Customer</h3>
<form>
  <div class="mb-3">
    <label for="text" class="form-label fs-6">Nama</label>
    <input type="text" class="form-control" id="text" name="name" >
  <div class="mb-3">
    <label for="text" class="form-label fs-6">Alamat</label>
    <input type="text" class="form-control" id="text" name="alamat" >
  <div class="mb-3">
    <label for="email" class="form-label fs-6">Email</label>
    <input type="email" class="form-control" id="email" name="email" >
  <div class="mb-3">
    <label for="number" class="form-label fs-6">No_hp</label>
    <input type="text" class="form-control" id="number" name="no_hp" >
  <div class="mb-3">
    <label for="text" class="form-label fs-6">Status</label>
    <input type="text" class="form-control" id="text" name="status" >
   
  </div>
 
  <button type="submit" class="btn btn-primary">Kirim </button>
  <a href="#" class="btn btn-warning" type="button">Batal</a>
</form>
 </div>
</x-app>