<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::all();
        return view('admin.questions.index' , compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionRequest $request)
    {
        
        Question::create($request->validated());
        return redirect()->route('question.index')->with('success' , __('custom.Question added successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $question = Question::findOrFail($id);
        return view('admin.questions.edit' , compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuestionRequest $request, string $id)
    {
        $question = Question::findOrFail($id);
        $question->update($request->validated());
        return redirect()->route('question.index')->with('success' , __('custom.Question updated successfully'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()->route('question.index')->with('success' , __('custom.Question deleted successfully'));

    }

    public function changeStatus($id)
    {
        $question = Question::findOrFail($id);
        $question->status = ! $question->status;
        $question->save();
        if($question->status == 1)
        {
            return redirect()->route('question.index')->with('success' , __('custom.Question activated successfully'));    

        }else{
            return redirect()->route('question.index')->with('success' , __('custom.Question deactivated successfully'));    

        }
    }
}
