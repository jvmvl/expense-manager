<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index(){
        $expenses = Expense::all();
        return view('expenses.index', compact('expenses'));
    }

    public function create(){
        return view('expenses.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date'
        ]);

        Expense::create($request->all());
        return redirect()->route('expenses.index')->with('success', 'Expense addedd successfully.');
    }

    public function edit(Expense $expense){
        return view('expenses.edit', compact('expense'));
    }

    public function update(Request $request, Expense $expense){
        $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date'
        ]);

        $expense->update($request->all());
        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }

    public function destroy(Expense $expense){
        $expense->delete();
        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }
}
