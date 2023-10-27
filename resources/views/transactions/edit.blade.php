<!-- resources/views/transactions/edit.blade.php -->

@extends('layouts.App')

@section('content')
    <div class="container">
        <h2>Edit Transaksi</h2>

        <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="amount">Amount:</label>
            <input type="number" name="amount" value="{{ $transaction->amount }}" required>
            <br>

            <label for="type">Type:</label>
            <select name="type" required>
                <option value="income" {{ $transaction->type == 'income' ? 'selected' : '' }}>Income</option>
                <option value="expense" {{ $transaction->type == 'expense' ? 'selected' : '' }}>Expense</option>
            </select>
            <br>

            <label for="category">Category:</label>
            <input type="text" name="category" value="{{ $transaction->category }}" required>
            <br>

            <label for="notes">Notes:</label>
            <textarea name="notes">{{ $transaction->notes }}</textarea>
            <br>

            <button type="submit">Update Transaksi</button>
        </form>
    </div>
@endsection
