<!-- resources/views/transactions/create.blade.php -->

@extends('layouts.template')

@section('content')
    <div class="container">
        <h2><center>Tambah Transaksi Baru</center></h2>

        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf

            <label for="amount">Amount:</label>
            <input type="number" name="amount" required>
            <br>

            <label for="type">Type:</label>
            <select name="type" required>
                <option value="income">Income</option>
                <option value="expense">Expense</option>
            </select>
            <br>

            <label for="category">Category:</label>
            <input type="text" name="category" required>
            <br>

            <label for="notes">Notes:</label>
            <textarea name="notes"></textarea>
            <br>

            <button type="submit">Tambah Transaksi</button>
        </form>
    </div>
@endsection
