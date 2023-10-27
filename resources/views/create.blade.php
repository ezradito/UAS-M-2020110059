@extends('layouts.app')

@section('content')
    <h1>Create Book</h1>

    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control">
        </div>
        <div class="form-group">
            <label for="judul">Title</label>
            <input type="text" name="judul" id="judul" class="form-control">
        </div>
        <div class="form-group">
            <label for="halaman">Pages</label>
            <input type="number" name="halaman" id="halaman" class="form-control">
        </div>
        <div class="form-group">
            <label for="kategori">Category</label>
            <input type="text" name="kategori" id="kategori" class="form-control">
        </div>
        <div class="form-group">
            <label for="penerbit">Publisher</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
