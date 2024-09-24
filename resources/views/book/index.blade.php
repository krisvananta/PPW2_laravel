@extends('layouts.layout')

@section('content')
<table class="table table-striped table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="">No</th>
            <th scope="col">ID</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Penulis</th>
            <th scope="col">Harga</th>
            <th scope="col">Tanggal Terbit</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $rowNumber = 1;
        @endphp
        @foreach ($book_data as $book)
            <tr>
                <td>{{ $rowNumber++ }}</td>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ "Rp. " . number_format($book->price, 2, ',', '.') }}</td>
                <td>
                    @if ($book->date_published instanceof \Carbon\Carbon)
                        {{ $book->date_published->format('d/m/y') }}
                    @else
                        {{ $book->date_published ?? '-' }}
                    @endif
                </td>
                <td>
                    <!-- Aksi buttons can be added here -->
                    <!-- Tombol Edit -->
                    <form action="{{ route('book.edit', $book->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button class="btn btn-sm btn-primary">Edit</button>    
                    </form>

                    <!-- Tombol Delete -->
                    <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Confirm delete?')"
                            type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('book.create') }}" class="btn btn-primary float-end">Add Book</a>

<div class="mt-3">
    <p>Total Data Buku: {{ $book_quantity }}</p>
</div>
<div class="mt-3">
    <p>Total Harga Buku: {{ $total_price }}</p>
</div>
@endsection