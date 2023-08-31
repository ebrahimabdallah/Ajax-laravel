<?php

namespace App\Http\Controllers;

use App\Models\SearchAjax;
use Illuminate\Http\Request;

class SearchAjaxController extends Controller
{
    public function index()
    {
        $searchData = SearchAjax::all();
        return view('SearchPage', compact('searchData'));
    }

    public function Search(Request $request)
    {
        if ($request->ajax()) {
            $data = SearchAjax::where('Name', 'LIKE', '%' . $request->get('text_search_query') . '%')
                ->orWhere('Email', 'LIKE', '%' . $request->get('text_search_query') . '%')
                ->orWhere('id', 'LIKE', '%' . $request->get('text_search_query') . '%')
                ->orWhere('Salary', 'LIKE', '%' . $request->get('text_search_query') . '%')
                ->orWhere('JobTittle', 'LIKE', '%' . $request->get('text_search_query') . '%')
                ->orWhere('Age', 'LIKE', '%' . $request->get('text_search_query') . '%')
                ->get();

            return response()->json($data);
        }
    }


}