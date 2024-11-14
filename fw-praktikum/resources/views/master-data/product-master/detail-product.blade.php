<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p4">
        <div class="p-6 overflow-x-auto bg-white shadow-md rounded-lg">
            <a href="{{ route('product') }}" class="text-blue-500 hover:underlined">
                Back
            </a>

            <div class="mt-4">
                <h3 class="mb-4 text-2xl font-semibold">{{ $product->product_name}}</h3>
                <p><strong>ID :</strong> {{ $product->id}}</p>
                <p><strong>Unit : </strong> {{ $product->unit}}</p>
                <p><strong>Type : </strong> {{ $product->type}}</p>
                <p><strong>Information : </strong> {{ $product->information}}</p>
                <p><strong>Qty : </strong> {{ $product->qty }}</p>
                <p><strong>Producer : </strong> {{ $product->producer}}</p>
            </div>
        </div>
    </div>
</x-app-layout>