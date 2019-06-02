<?php

namespace App\Http\Controllers\API;

<<<<<<< HEAD
use App\Expense;
use App\Http\Controllers\Controller;
use App\Http\Resources\ExpenseResource;
=======


use App\Expense;
use App\Http\Controllers\Controller;
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
<<<<<<< HEAD
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ExpenseResource::collection(Expense::latest()->get());
=======
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Expense::all();
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
        $expense = (new Expense())->createModel($request);
        return response()->json(new ExpenseResource($expense), 201);
=======
        //
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
<<<<<<< HEAD
     * @return ExpenseResource
     */
    public function show(Expense $expense)
    {
        return new ExpenseResource($expense);
=======
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
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
    public function update(Request $request, Expense $expense)
    {
<<<<<<< HEAD
        $expense = $expense->updateModel($request, $expense);
        return response()->json(new ExpenseResource($expense), 200);
=======
        //
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
<<<<<<< HEAD
        $expense->delete();
        return response()->json(["Expense deleted"], 204);
=======
        //
>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
    }
}
