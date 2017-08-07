<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report1;
use App\Info;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = ['Прийнято викликів','Передано на невідкладну допомогу','Поради (заг. к-сть)','Передано іншим відділенням','Виконано виїздів'];

        $sections = ['Липини 10', 'Рівненська 8', 'Волі 2', 'Бендел.1', 'Словацьк.6', 'Шацьк 1', 'Любомль 1', 
            'Липини 12', 'Рівненська 9', 'Волі 3', 'Бендел.4', 'Словацьк.7', 'Шацьк 2', 'Любомль 2', 
            'Липини 14', 'Піща', 'Волі 5', 'Бендел.11', 'Словацьк.15', 'Турійськ', 'Рожище 1', 
            'Луків', 'Купичів', 'Головно', 'Гуща', 'Доросині', '16 (Торчин)', 'Рожище 2'];
        
        $region = ['м. Луцьк', 'Дит.нев.', 'Луц-ий р-н', 'Рож-ий р-н', 'Тур-ий р-н', 'Ків-ий. р-н', 'Шац-ий р-н', 'Люб-мль. р-н', 'Іван-ий. р-н', 'Горх-ий р-н.', 'Локач-ий р-н', 'В.Вол-ий р-н.', 'Нов-ий р-н', 'Ков-ий р-н.', 'Рат-ий р-н.', 'Любеш. р-н', 'Ман-ий р-н.', 'інш.'];
        //dd($section);
        
        return view('report1.create', ['types'=>$types, 'sections'=>$sections, 'region'=>$region ]);       
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
        //dd($post);
        $array = ['Липини 10', 'Рівненська 8', 'Волі 2', 'Бендел.1', 'Словацьк.6', 'Шацьк 1', 'Любомль 1', 
            'Липини 12', 'Рівненська 9', 'Волі 3', 'Бендел.4', 'Словацьк.7', 'Шацьк 2', 'Любомль 2', 
            'Липини 14', 'Піща', 'Волі 5', 'Бендел.11', 'Словацьк.15', 'Турійськ', 'Рожище 1', 
            'Луків', 'Купичів', 'Головно', 'Гуща', 'Доросині', '16 (Торчин)', 'Рожище 2', 'Доставлено на госпіталізацію', 'Госпіталізовано', 'Не госпіталізовано', 'Відмова від госпіталізації', 'ЕКГ (заг. к-сть)', 'м. Луцьк', 'Дит.нев.', 'Луц-ий р-н', 'Рож-ий р-н', 'Тур-ий р-н', 'Ків-ий. р-н', 'Шац-ий р-н', 'Люб-мль. р-н', 'Іван-ий. р-н', 'Горх-ий р-н.', 'Локач-ий р-н', 'В.Вол-ий р-н.', 'Нов-ий р-н', 'Ков-ий р-н.', 'Рат-ий р-н.', 'Любеш. р-н', 'Ман-ий р-н.', 'інш.', 'Екстр.', 'Неекстр.'];
        
        foreach ($array as $i=>$arr)
        {
            $info['title'] = $arr;
            $info['value'] = $post["value$i"];
            $info['date'] = $post["date"];

            Info::create($info);           
        }
         //dd($sect); 

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
