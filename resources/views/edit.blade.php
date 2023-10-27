@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" value="{{ $book->isbn }}" readonly>
        </div>
        <div class="form-group">
            <label for="judul">Title</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $book->judul }}">
        </div>
        <div class="form-group">
            <label for="halaman">Pages</label>
            <input type="number" name="halaman" id="halaman" class="form-control" value="{{ $book->halaman }}">
        </div>
        <div class="form-group">
            <label for="kategori">Category</label>
            <input type="text" name="kategori" id="kategori" class="form-control" value="{{ $book->kategori }}">
        </div>
        <div class="form-group">
            <label for="penerbit">Publisher</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{ $book->penerbit }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
