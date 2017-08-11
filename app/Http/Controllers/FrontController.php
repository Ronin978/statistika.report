<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report1;
use App\Info;
use App\Group;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maxDate = Info::max('date');

        $types = Group::where('group', 'call')->get()->first();
        $typ = explode(";", $types->title);
        $table0 = Report1::where('date', $maxDate)->get();

        

        $table1 = Info::where('id_group', '2')->where('date', $maxDate)->get()->first();
        $tabl1 = explode(";", $table1->value);
        $sections = Group::where('group', 'sections')->get()->first();
        $sect = explode(";", $sections->title);

        $table2 = Info::where('id_group', '3')->where('date', $maxDate)->get()->first();
        $tabl2 = explode(";", $table2->value);
        $gospit = Group::where('group', 'gosp')->get()->first();
        $gosp = explode(";", $gospit->title);

        $table3 = Info::where('id_group', '4')->where('date', $maxDate)->get()->first();
        $tabl3 = explode(";", $table3->value);
        $region = Group::where('group', 'region')->get()->first();
        $reg = explode(";", $region->title);

        $table4 = Info::where('id_group', '0')->where('date', $maxDate)->get()->first();
        $tabl4 = explode(";", $table4->value);
        //dd($tabl1);

        return view('front.index', ['types'=>$typ, 'sections'=>$sect, 'gospit'=>$gosp, 'region'=>$reg, 'table0'=>$table0, 'table1'=>$tabl1, 'table2'=>$tabl2, 'table3'=>$tabl3, 'table4'=>$tabl4, 'date'=>$maxDate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Group::where('group', 'call')->get()->first();
        $typ = explode(";", $types->title);

        $sections = Group::where('group', 'sections')->get()->first();
        $sect = explode(";", $sections->title);

        $gospit = Group::where('group', 'gosp')->get()->first();
        $gosp = explode(";", $gospit->title);

        $region = Group::where('group', 'region')->get()->first();
        $reg = explode(";", $region->title);

        return view('report1.create', ['types'=>$typ, 'sections'=>$sect, 'gospit'=>$gosp, 'region'=>$reg]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->all();

        //$types = Group::where('group', 'call')->get()->first();
        //$typ = explode(";", $types->title);

        $sections = Group::where('group', 'sections')->get()->first();
        $sect = explode(";", $sections->title);

        $gospit = Group::where('group', 'gosp')->get()->first();
        $gos = explode(";", $gospit->title);

        $region = Group::where('group', 'region')->get()->first();
        $reg = explode(";", $region->title);

        for ($i=0; $i < 4; $i++) 
        { 
            switch ($i) 
            {
                case 0:
                    $info['id_group'] = $sections->id;
                    $info['value'] = '';
                    for ($i=1; $i <= count($sect); $i++) 
                    {                         
                        if ($i==count($sect)) 
                        {
                            $info['value'] .= $post["value$i"];
                        }
                        else
                        {
                            $info['value'] .= $post["value$i"].';';
                        }
                    }
                    $info['date'] = $post["date"];
                    Info::create($info);
                    //break 1;
                case 1:
                    $info['id_group'] = $gospit->id;
                    $info['value'] = '';
                    for ($i=count($sect)+1; $i <= count($sect)+count($gos); $i++) 
                    { 
                        if ($i==count($sect)+count($gos)) 
                        {
                            $info['value'] .= $post["value$i"];
                        }
                        else
                        {
                            $info['value'] .= $post["value$i"].';';
                        }
                    }
                    $info['date'] = $post["date"];
                    Info::create($info);
                    //break 1;
                case 2:
                    $info['id_group'] = $region->id;
                    $info['value'] = '';
                    for ($i=count($sect)+count($gos)+1; $i <= count($sect)+count($gos)+count($reg); $i++) 
                    { 
                        if ($i==count($sect)+count($gos)+count($reg)) 
                        {
                            $info['value'] .= $post["value$i"];
                        }
                        else
                        {
                            $info['value'] .= $post["value$i"].';';
                        }
                    }
                    $info['date'] = $post["date"];
                    Info::create($info);
                    //break 1;
                case 3:
                    $info['id_group'] = 0;
                    $info['value'] = '';
                    for ($i=count($sect)+count($gos)+count($reg)+1; $i <= count($sect)+count($gos)+count($reg)+2; $i++) 
                    { 
                        if ($i==count($sect)+count($gos)+count($reg)+2) 
                        {
                            $info['value'] .= $post["value$i"];
                        }
                        else
                        {
                            $info['value'] .= $post["value$i"].';';
                        }
                    }
                    $info['date'] = $post["date"];
                    Info::create($info);
                   // break 1;
            }
             
        }
        

        for ($i=0; $i < 5 ; $i++)
        {
            $report['day'] = $post["day$i"];  
            $report['night'] = $post["night$i"];
            $report['type'] = $i;
           
            $report['date'] = $post["date"];
            $report['chergovy'] = $post["chergovy"];
           
            Report1::create($report); 
        }
        return back();
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

    public function QuickFind(Request $request)
    {
        //
    }
}
