<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sections;
use App\Http\Requests\StoreSectionsRequest;
use App\Http\Requests\UpdateSectionsRequest;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
     public function sections(){
        $sections = Sections::all();
        return view('admin.sections')->with(compact('sections'));
     }
}
