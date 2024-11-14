<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p4">
        <div class="p-6 overflow-x-auto bg-white shadow-md rounded-lg">
            <a href="{{ route('supplier') }}" class="text-blue-500 hover:underlined">
                Back
            </a>

            <div class="mt-4">
                <h3 class="mb-4 text-2xl font-semibold">{{ $supplier->supplier_name}}</h3>
                <p><strong>ID :</strong> {{ $supplier->id}}</p>
                <p><strong>Supplier Address : </strong> {{ $supplier->supplier_address}}</p>
                <p><strong>Phone : </strong> {{ $supplier->phone}}</p>
                <p><strong>Comment : </strong> {{ $supplier->comment}}</p>
            </div>
        </div>
    </div>
</x-app-layout>