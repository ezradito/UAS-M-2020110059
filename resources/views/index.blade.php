<!-- resources/views/transactions/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Transaksi</h2>

        <div class="mb-3">
            Saldo: {{ $balance }}
            <br>
            Total Income: {{ $totalIncome }}
            <br>
            Total Expense: {{ $totalExpense }}
            <br>
            Jumlah Transaksi Income: {{ $incomeCount }}
            <br>
            Jumlah Transaksi Expense: {{ $expenseCount }}
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th>Notes</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->type }}</td>
                    <td>{{ $transaction->category }}</td>
                    <td>{{ $transaction->notes }}</td>
                    <td>{{ $transaction->created_at }}</td>
                    <td>
                        <a href="{{ route('transactions.show', $transaction->id) }}">Show</a>
                        <a href="{{ route('transactions.edit', $transaction->id) }}">Edit</a>
                        <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
