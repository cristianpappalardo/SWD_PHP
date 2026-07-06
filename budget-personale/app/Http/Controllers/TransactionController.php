<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'date' => 'required|date',
                'amount' => 'required|numeric',
                'category' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);

            $transaction = Transaction::create($validatedData);

            return redirect()->route('transactions.index')->with('success', 'Transaction created successfully.');
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transactions.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transactions.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'date' => 'required|date',
                'amount' => 'required|numeric',
                'category' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);

            $transaction = Transaction::findOrFail($id);
            $transaction->update($validatedData);

            return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully.');
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $transaction = Transaction::findOrFail($id);
            $transaction->delete();

            return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully.');
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // JSON API methods

    public function storeJson(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'date' => 'required|date',
                'amount' => 'required|numeric',
                'category' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);

            $transaction = Transaction::create($validatedData);

            return response()->json(['message' => 'Transaction created successfully.', 'transaction' => $transaction], 201);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function updateJson(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'date' => 'required|date',
                'amount' => 'required|numeric',
                'category' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);

            $transaction = Transaction::findOrFail($id);
            $transaction->update($validatedData);

            return response()->json(['message' => 'Transaction updated successfully.', 'transaction' => $transaction], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function destroyJson(string $id)
    {
        try {
            $transaction = Transaction::findOrFail($id);
            $transaction->delete();

            return response()->json(['message' => 'Transaction deleted successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function indexJson()
    {
        try {
            $transactions = Transaction::all();
            return response()->json(['transactions' => $transactions], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function showJson(string $id)
    {
        try {
            $transaction = Transaction::findOrFail($id);
            return response()->json(['transaction' => $transaction], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
