<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto mt-5">
                        <h2 class="mb-5 text-2xl font-bold">Update supplier</h2>
                        <x-auth-session-status class="mb-4" :status="session('success')" />
                        <form action="{{ route('supplier-update', $supplier->id) }}" method="POST"
                            class="p-6 bg-white rounded shadow-md">
                            @csrf
                            @method('PUT')


                            <div class="mb-4">
                                <label for="supplier_name" class="block font-medium text-gray-700">Supplier Name:</label>
                                <input type="text" id="supplier_name" name="supplier_name"
                                    value="{{ old('supplier_name', $supplier->supplier_name) }}" required
                                    class="w-full p-2 mt-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                            </div>

                            <div class="mb-4">
                                <label for="supplier_address" class="block font-medium text-gray-700">Supplier Address:</label>
                                <input type="text" id="supplier_address" name="supplier_address"
                                    value="{{ old('supplier_address', $supplier->supplier_address) }}" required
                                    class="w-full p-2 mt-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="block font-medium text-gray-700">Phone:</label>
                                <input type="text" id="phone" name="phone"
                                    value="{{ old('phone', $supplier->phone) }}" required
                                    class="w-full p-2 mt-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                            </div>

                            <div class="mb-4">
                                <label for="comment" class="block font-medium text-gray-700">Comment:</label>
                                <input type="text" id="comment" name="comment"
                                    value="{{ old('comment', $supplier->comment) }}" required
                                    class="w-full p-2 mt-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                            </div>


                            


                            <div class="flex justify-end">
                                <button type="submit"
                                    class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-600 focus:ring-2 focus:ring-indigo-500">Update
                                    supplier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>