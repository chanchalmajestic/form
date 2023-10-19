<?php

namespace App\Http\Controllers;

use App\Models\FAQs;
use App\Http\Requests\StoreFAQsRequest;
use App\Http\Requests\UpdateFAQsRequest;
use Illuminate\Http\Request;

class FAQsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $data = FAQs::orderBy('id','desc')->paginate(10);
        return view('admin.fetchData',compact('data'));
    }
        // $data = FAQs :: all()->sortDesc();
        // return view('admin.fetchData', compact('data'))



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/faqform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faqs = new FAQs;
        $faqs->id = $request->id;
        $faqs->question = $request->question;
        $faqs->answer = $request->answer;
        $faqs->save();

        return redirect('admin/fetchData')->with('success','Data has been submitted');

    }

    /**
     * Display the specified resource.
     */
    public function show(FAQs $fAQs)
    {
        $faqs = FAQs::onlyTrashed()->paginate(10);
        return view('admin/deletedData', compact('faqs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faqs = FAQs::find($id);
        return view('admin/editData', compact('faqs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $faqs = FAQs::find($id);
        $faqs->question = $request->input('question');
        $faqs->answer = $request->input('answer');
        $faqs->update();
        return redirect('admin/fetchData');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faqs = FAQs::find($id);
        $faqs->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
    }


    // public function getDeletedData($id) 
    // {
    //     $faqs = FAQs::onlyTrashed()->paginate(10);

    //     return view('admin.deletedData', compact('faqs'))
    //     ->with('i', (request()->input('page', 1) - 1) * 10);
    // }

    public function restoreDeletedData($id) 
    {

        $faqs = FAQs::withTrashed()->findOrFail($id);

        $faqs->restore();

        return redirect('admin/fetchData')->with('success', 'You successfully restored the Data');
    }


    public function deletePermanently($id) 

    {

        $faqs = FAQs::withTrashed()->findOrFail($id);

        $faqs->forceDelete();

        return redirect()->back()->with('success', 'The Data is deleted permanently');
    }
}