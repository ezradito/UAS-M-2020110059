@extends('layouts.app')

@section('content')
    <h1>Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-success">Add Book</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Title</th>
                <th>Pages</th>
                <th>Category</th>
                <th>Publisher</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->halaman }}</td>
                    <td>{{ $book->kategori }}</td>
                    <td>{{ $book->penerbit }}</td>
                    <td>
                        <a href="{{ route('books.show', $book) }}" class="btn btn-info">View</a>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
