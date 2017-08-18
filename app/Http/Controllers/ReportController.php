<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report1;
use App\Info;
use App\Group;

class ReportController extends Controller
{
    public function create1()
    {
        $types = Group::where('group', 'call')->get()->first();
        $typ = explode(";", $types->title);

        $sections = Group::where('group', 'sections')->get()->first();
        $sect = explode(";", $sections->title);

        $gospit = Group::where('group', 'gosp')->get()->first();
        $gosp = explode(";", $gospit->title);

        $region = Group::where('group', 'region')->get()->first();
        $reg = explode(";", $region->title);

        return view('report.create1', ['types'=>$typ, 'sections'=>$sect, 'gospit'=>$gosp, 'region'=>$reg]);
    }

    public function create2()
    {
        return view('report.create2');
    }

    public function create3()
    {
        return view('report.create3');
    }

    public function create4()
    {
        return view('report.create4');
    }

    public function store(Request $request)
    {
        $post = $request->all();

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

    public function storea(Request $request)
    {
    	//
    }

    public function storeb(Request $request)
    {
    	//
    }
	
	public function storec(Request $request)
    {
    	//
    }
	
	public function stored(Request $request)
    {
    	//
    }

}
