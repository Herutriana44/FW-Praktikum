<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil semua produk
        $query = Supplier::query();

        // Cek apakah ada parameter 'search' di request
        if ($request->has('search') && $request->search != '') {


            // Melakukan pencarian berdasarkan nama produk atau informasi
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('supplier_name', 'like', '%' . $search . '%');
            });
        }


        // Ambil produk dengan paginasi
        $data = $query->paginate(2);
        return view("master-data.supplier-master.index-supplier", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master-data.supplier-master.create-supplier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi_data = $request->validate([
            'supplier_name' => 'required|string|max:50',
            'supplier_address' => 'required|string|max:255',
            'phone' => 'required|string|max:14',
            'comment' => 'required|string|max:255',
        ]);

        Supplier::create($validasi_data);

        return redirect()->back()->with('success', 'Supplier Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        return view("master-data.supplier-master.detail-supplier", compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        return view("master-data.supplier-master.edit-supplier", compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi_data = $request->validate([
            'supplier_name' => 'required|string|max:50',
            'supplier_address' => 'required|string|max:255',
            'phone' => 'required|string|max:14',
            'comment' => 'required|string|max:255',
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->update([
            'supplier_name' => $request->supplier_name,
            'supplier_address' => $request->supplier_address,
            'phone' => $request->phone,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Supplier Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::find($id);
        if ($supplier) {
            $supplier->delete();
            return redirect()->route('supplier')->with('success', 'Supplier Berhasil Dihapus.');
        }

        return redirect()->route('supplier')->with('error', 'Supplier Tidak Berhasil Dihapus.');
    }
}
