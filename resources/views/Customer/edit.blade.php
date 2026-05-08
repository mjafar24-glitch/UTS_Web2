<x-app>
<x-slot:title>{{ $title }}</x-slot:title>
 <div class="card shadow p-4">
    <h3 class="text-center mb-4">Edit Customer</h3>
<form method="POST" action="{{ route('customer.update', $customer) }}">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="text" class="form-label fs-6">Nama</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="text" name="name" value="{{ old('name',$customer->name) }}">
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
  </div>
  <div class="mb-3">
    <label for="text" class="form-label fs-6">Alamat</label>
    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="text" name="alamat" value="{{ old('alamat',$customer->alamat) }}" >
    @error('alamat')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label fs-6">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email',$customer->email) }}" >
      @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
  </div>
  <div class="mb-3">
    <label for="number" class="form-label fs-6">No_hp</label>
    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="number" name="no_hp" value="{{ old('no_hp',$customer->no_hp) }}" >
      @error('no_hp')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
  </div>
  <div class="mb-3">
    <label for="text" class="form-label fs-6">Status</label>
    <input type="text" class="form-control @error('status') is-invalid @enderror" id="text" name="status" value="{{ old('status',$customer->status) }}" >
    @error('status')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Kirim </button>
  <a href="{{ route('index') }}" class="btn btn-warning" type="button">Batal</a>
</form>
 </div>
</x-app>
