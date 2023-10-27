<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        // Fetch transactions and order them by created_at in ascending order
        $transactions = Transaction::orderBy('created_at', 'asc')->get();

        // Additional logic for calculating balance, total income, and total expense
        $balance = $transactions->sum('amount');
        $totalIncome = $transactions->where('type', 'income')->sum('amount');
        $totalExpense = $transactions->where('type', 'expense')->sum('amount');
        $incomeCount = $transactions->where('type', 'income')->count();
        $expenseCount = $transactions->where('type', 'expense')->count();
        $transaction = Transaction::all();
        $transaction = Transaction::orderBy('created_at', 'asc')->get();

        return view('transactions.index', compact('transactions', 'balance', 'totalIncome', 'totalExpense', 'incomeCount', 'expenseCount'));
    }


    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'type' => 'required|in:income,expense',
            'category' => 'required',
            'notes' => 'nullable',
        ]);

        Transaction::create($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil ditambahkan!');
    }

    public function show(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'type' => 'required|in:income,expense',
            'category' => 'required',
            'notes' => 'nullable',
        ]);

        $transaction->update($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil diperbarui!');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil dihapus!');
    }
}
