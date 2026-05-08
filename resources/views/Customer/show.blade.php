<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="text-end">
        <a href="{{ route('index') }}" class="btn btn-warning mb-2" role="button" >Back</a>
    </div>
    {{-- Customer --}}
        <ul class="list-group">
            <h3 class="text-center">Detail Customer</h3>
            <li class="list-group-item">Name : {{ $customer->name }}</li>
            <li class="list-group-item">Alamat : {{ $customer->alamat }}</li>
            <li class="list-group-item">Email : {{ $customer->email }}</li>
            <li class="list-group-item">No Hp : {{ $customer->no_hp }}</li>
            <li class="list-group-item">Status : {{ $customer->status }}</li>

            <li class="list-group-item">Created At: {{ $customer->created_at->diffForHumans() }}</li>
            <li class="list-group-item">Last Update: {{ $customer->updated_at->diffForHumans() }}</li>
        </ul>
</x-app>