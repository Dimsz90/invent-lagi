@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{ route('brands.create') }}" class="btn btn-primary mb-3">Buat brand Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
               <th>Nama</th>
               <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($brand as $item)
    <tr>
        <td>{{ $item->id}}</td>
        <td>{{ $item->name }}</td>
        <td>
            <a href="{{ route('brand.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form method="POST" action="{{ route('brand.destroy', $item->id) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm delete?')">Hapus</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="2">Maaf Data Brand belum tersedia</td>
    </tr>
@endforelse
      
        </tbody>        
    </table>
</div>
@endsection