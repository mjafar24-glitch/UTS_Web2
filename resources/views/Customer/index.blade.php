<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="text-end">
        <a href="#" class="btn btn-primary mb-2" role="button" >Tambah Data</a>
    </div>
    <div class=" container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white text-center">
                <h3>Data Customer</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class ="table table-bordered table-hover align-middle">
                        <thead class="table-primary text-center fs-5">
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No_hp</th>
                                <th>Status</th>
                            </tr>

                        </thead>
                        <tbody class="text-center fs-5 fw-normal">
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->alamat }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->no_hp }}</td>
                                    <td>{{ $customer->status }}</td>
                                </tr>
                                @endforeach
                        </tbody>
                        
                    </table>

                </div>

            </div>
           
        </div>
    </div>
</x-app>