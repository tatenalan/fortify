<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use App\Models\Form;
use App\Models\Question;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Form $form)
    {
        // hay 2 maneras de pasarle el form_id. Cual conviene?
        // 1) por request como input hidden. $request->form_id
        // 2) como 2ndo parametro en el metodo store. Form $form $form->id

        // number of questions
        $noq = $form->questions()->count();

        $rules = ["answer" => "required|array|min:$noq"];
        $messages = ["min" => "Debe responder las :min preguntas"];

        $this->validate($request, $rules, $messages);

        $user = auth()->user();
        $user->forms()->updateExistingPivot($form->id, ['result' => array_sum($request->answer), 'status' => 'completed']);
        return redirect()->back()
        ->with('success', array_sum($request->answer));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        $version = Auth()->user()->forms
            ->where('id', $form->id)
            ->first()->pivot->version;
        $answers = Answer::all();
        $questions = Question::where('form_id', $form->id)->get();
        $myForms = Auth()->user()->forms->pluck('code');
        $vac = compact('answers', 'questions', 'form', 'myForms', 'version');
        return view('forms.show', $vac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
