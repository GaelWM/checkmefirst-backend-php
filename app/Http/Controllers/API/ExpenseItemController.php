<?php

namespace App\Http\Controllers\API;

use App\ExpenseItem;
<<<<<<< HEAD
use App\Http\Controllers\Controller;
use App\Http\Resources\ExpenseItemResource;
use App\Http\Resources\ExpenseResource;
=======
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
use Illuminate\Http\Request;

class ExpenseItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
<<<<<<< HEAD
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ExpenseItemResource::collection(ExpenseItem::latest()->get());
=======
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ExpenseItem::all();
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
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
<<<<<<< HEAD
        $expenseItem = (new ExpenseItem())->createModel($request);
        return response()->json(new ExpenseResource($expenseItem), 201);
=======
        //
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExpenseItem  $expenseItem
<<<<<<< HEAD
     * @return ExpenseItemResource
     */
    public function show(ExpenseItem $expenseItem)
    {
        return new ExpenseItemResource($expenseItem);
=======
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseItem $expenseItem)
    {
        //
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
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
<<<<<<< HEAD
        $expenseItem = $expenseItem->updateModel($request, $expenseItem);
        return response()->json(new ExpenseResource($expenseItem), 200);
=======
        //
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExpenseItem  $expenseItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseItem $expenseItem)
    {
<<<<<<< HEAD
        $expenseItem->delete();
        return response()->json(["Expense Item deleted"], 204);
=======
        //
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
    }
}
