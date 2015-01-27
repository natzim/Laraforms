<?php namespace App\Http\Controllers;

use App\Form;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FormController extends Controller {

    /**
     * Display all forms
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('forms.index');
    }

    /**
     * Show the form for creating a new form
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created form in storage.
     */
    public function store()
    {
        $form = new Form;

        // Validate, then create, then return to new form
    }

    /**
     * Display the specified form
     *
     * @param $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $form = Form::findOrFail($id);

        return view('forms.show', ['form' => $form]);
    }

    /**
     * Show the form for editing the specified form
     *
     * @param $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $form = Form::findOrFail($id);

        return view('forms.edit', ['form' => $form]);
    }

    /**
     * Update the specified form in storage
     *
     * @param $id
     */
    public function update($id)
    {
        $form = Form::findOrFail($id);

        // Validate, then update, then return to updated form
    }

    /**
     * Remove the specified form from storage
     *
     * @param $id
     */
    public function destroy($id)
    {
        $form = Form::findOrFail($id);

        $form->delete();
    }

}
