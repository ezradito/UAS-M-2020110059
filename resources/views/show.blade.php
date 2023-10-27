@extends('layouts.app')

@section('content')
    <h1>{{ $book->judul }}</h1>
    <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
    <p><strong>Pages:</strong> {{ $book->halaman }}</p>
    <p><strong>Category:</strong> {{ $book->kategori }}</p>
    <p><strong>Publisher:</strong> {{ $book->penerbit }}</p>

    <a href="{{ route('books.edit', $book) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
@endsection
