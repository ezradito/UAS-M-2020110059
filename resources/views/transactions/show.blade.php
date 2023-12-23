<!-- resources/views/transactions/show.blade.php -->

@extends('layouts.template')

@section('content')
    <div class="container">
        <h2>Detail Transaksi</h2>

        <p><strong>Amount:</strong> {{ $transaction->amount }}</p>
        <p><strong>Type:</strong> {{ $transaction->type }}</p>
        <p><strong>Category:</strong> {{ $transaction->category }}</p>
        <p><strong>Notes:</strong> {{ $transaction->notes }}</p>
        <p><strong>Created At:</strong> {{ $transaction->created_at }}</p>

        <a href="{{ route('transactions.edit', $transaction->id) }}"><button type ='edit'>Edit</button></a>
        <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            
        </form>
    </div>
@endsection
