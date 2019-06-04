<?php

namespace App\Http\Controllers\API;

use App\Expense;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExpenseRequest;
use App\Http\Resources\ExpenseResource;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ExpenseResource::collection(Expense::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpenseRequest $expenseRequest)
    {
        $expense = (new Expense())->createModel($expenseRequest);
        return response()->json(new ExpenseResource($expense), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return ExpenseResource
     */
    public function show(Expense $expense)
    {
        return new ExpenseResource($expense);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(ExpenseRequest $expenseRequest, Expense $expense)
    {
        $expense = $expense->updateModel($expenseRequest, $expense);
        return response()->json(new ExpenseResource($expense), 200);
    }


    public function destroy(Expense $expense)
    {
        $expense->delete();
        return response()->json(["Expense deleted"], 204);
    }
}
