<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    <div class="text-end">
        <a href="{{ route('customer.create') }}" class="btn btn-primary mb-2" role="button" >Tambah Data</a>
    </div>
    <form action="">
        <div class="row g-3 mb-3 align-items-end">
            <div class="col-md-6">
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Search.." >
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </form>
    <div class=" container mt-5">

        <div class="card shadow">
            <div class="card-header bg-dark text-white text-center">
                <h3>Data Customer</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class ="table table-bordered table-hover align-middle">
                        <thead class="table-primary text-center fs-5 fw-bold">
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No_hp</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>
                        <tbody class="text-center fs-6 fw-normal">
                            @foreach ($customers as $customer)
                                <tr>
                                    
                                    <td>{{ $customers->firstItem() + $loop->index }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->alamat }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->no_hp }}</td>
                                    <td>{{ $customer->status }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('customer.edit', $customer) }}" class="btn btn-warning btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                        
                    </table>

                </div>

            </div>
           
        </div>
    </div>
    {{ $customers->links() }}
</x-app>