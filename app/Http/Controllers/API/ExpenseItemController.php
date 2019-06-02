<?php

namespace App\Http\Controllers\API;

use App\ExpenseItem;
use App\Http\Controllers\Controller;
use App\Http\Resources\ExpenseItemResource;
use App\Http\Resources\ExpenseResource;
use Illuminate\Http\Request;

class ExpenseItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ExpenseItemResource::collection(ExpenseItem::latest()->get());
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
    public function store(Request $request)
    {
        $expenseItem = (new ExpenseItem())->createModel($request);
        return response()->json(new ExpenseResource($expenseItem), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExpenseItem  $expenseItem
     * @return ExpenseItemResource
     */
    public function show(ExpenseItem $expenseItem)
    {
        return new ExpenseItemResource($expenseItem);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExpenseItem  $expenseItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseItem $expenseItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpenseItem  $expenseItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseItem $expenseItem)
    {
        $expenseItem = $expenseItem->updateModel($request, $expenseItem);
        return response()->json(new ExpenseResource($expenseItem), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExpenseItem  $expenseItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseItem $expenseItem)
    {
        $expenseItem->delete();
        return response()->json(["Expense Item deleted"], 204);
    }
}
