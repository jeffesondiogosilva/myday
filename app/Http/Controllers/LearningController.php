<?php

namespace App\Http\Controllers;

use App\Contracts\LearningRepoI;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Learning;
use Illuminate\Support\Facades\DB;

use SebastianBergmann\CodeCoverage\Report\Html\Facade;
class LearningController extends Controller
{
   protected $learningRepo;
   
    public function __construct(LearningRepoI $repo){
        
        $learnings = $this->learningRepo->getAll();
        return $learnings; 
    }
    
    public function index(Learning $learning)
    {
        // $aprendizados = Learning::all();          
        // return view('learnings.index')->with('aprendizados', $aprendizados);
        $learning = $this->learningRepo->getAll();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Learning::create($request->all());
        
        
        return redirect()->route('learnings-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {                
        
        $learning = Learning::where('id', $id)->first();    
        
        return view('learnings.edit')->with('learning',  $learning);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Learning $learning, Request $request, $id)
    {        
        $data = [
            'title' => $request->title,            
        ];
        Learning::where('id', $id)->update($data);
        return redirect()->route('learnings-index');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Learning::where('id', $id)->delete();
        return redirect()->route('learnings-index');
    }
}