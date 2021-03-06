<?php

namespace App\Http\Controllers\API;

use App\ExpenseItem;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExpenseItemRequest;
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
    public function store(ExpenseItemRequest $expenseItemRequest)
    {
        $expenseItem = (new ExpenseItem())->createModel($expenseItemRequest);
        return response()->json(new ExpenseItemResource($expenseItem), 201);
    }


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
    public function update(ExpenseItemRequest $expenseItemRequest, ExpenseItem $expenseItem)
    {
        $expenseItem = $expenseItem->updateModel($expenseItemRequest, $expenseItem);
        return response()->json(new ExpenseItemResource($expenseItem), 200);
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
