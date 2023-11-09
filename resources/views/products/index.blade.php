@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Buat product Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
               <th>Part Number</th>
               <th>Category</th>
               <th>Brand</th>
               <th>Uom</th>
               <th>currency</th>
               <th>Price</th>
               <th>image</th>
               <th>remarks</th>
               <th>deskripsi</th>
               <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($product as $item)
    <tr>
        <td>{{ $item->Part_number }}</td>
        <td>{{ $item->Category_id}}</td>
        <td>{{ $item->Brand_id}}</td>
        <td>{{ $item->Uom_id}}</td>
        <td>{{ $item->currency }}</td>
        <td>{{  number_format($item->price, 0, ',', '.') }}</td>
        
        <td>
            @if($item->image && Storage::exists($item->image))
                <img src="{{ Storage::url($item->image) }}" alt="{{ $item->Part_number }}">
            @else
                <p>GAMBAR GA ADA !!!</p>
            @endif 
        </td>
        <td>{{ $item->remarks }}
        <td>{{ $item->Description }}</td>
        <td>
            <a href="{{ route('product.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form method="POST" action="{{ route('product.destroy', $item->id) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin dekk?')">Hapus</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="10">Maaf Data Product belum tersedia</td>
    </tr>
@endforelse
      
        </tbody>        
    </table>
</div>
@endsection
