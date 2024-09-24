@extends('layouts.layout')

@section('content')

<div class="container">
    <h4>Tambah Buku</h4>
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div>Title <input type="text" name="title"></div>
        <div>Author <input type="text" name="author"></div>
        <div>Price <input type="text" name="price"></div>
        <div>Date Published <input type="date" name="date_published"></div>
        <button type="submit">Save</button>
        <a href="{{'/book'}}">Back</a>
    </form>
</div>
@endsection