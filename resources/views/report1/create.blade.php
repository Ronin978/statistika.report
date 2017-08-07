@extends('layouts.shablon1')

@section('content')

<div id="templatemo_wrapper">
     
    <form id="firstForm" method="POST" action="{{action('FrontController@store')}}">

        <div id="templatmeo_menu">
            <p align="center">РАПОРТ старших лікарів змін <input type="text" name="chergovy"> за чергування 
                {{date("l / «d» F Y")}}.</p>
        </div>
        <div id="templatemo_main">
    	   <div id="home" class="main_box">
        	   <div class="col col-my">
                    Дата: <input type="date" name="date" value="{{date('Y-m-d')}}"> 
                    <br><br>

                    Екстр. - <input type="text" id="extr" name="value_i">
                    <br>
                    Неекстр. - <input type="text" id="noext" name="value_i+1">
                    <div align="center">
                        <table class="mytable">
                            <tr>
                                <td class="firstColumn"></td>
                                <td>День</td>
                                <td>Ніч</td>
                                <td>Всього</td>
                            </tr>                            
                            @foreach ($types as $key => $type)
                                <tr>
                                    <td class="firstColumn">
                                        {{$type}}
                                    </td>
                                    <td>
                                        <input type="text" name="day{{$key}}" oninput="oninputt('<?php echo $key ?>');">
                                    </td>
                                    <td>
                                        <input type="text" name="night{{$key}}" oninput="oninputt('<?php echo $key ?>');">
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach        
                           
                        </table>
                    
                        <table id="myTable" class="table mytable" >
                            <tr>
                            @foreach ($sections as $key => $sect)
                                
                                <td>{{$sect}}<br>
                                    <input type="text" id="value{{$key}}" class="two" name="value{{$key}}" value="{{$key+1}}">
                                </td>
                                @if ( ($key+1) % 7 == 0)
                                    </tr>
                                    <tr>
                                @endif
                            
                            @endforeach
                            </tr>
                        </table>
                    
                        <table class="table mytable">
                            <tr>
                                <td>Доставлено на госпіталізацію </td>
                                <td>Госпіталізовано</td>
                                <td>Не госпіталізовано</td>
                                <td>Відмова від госпіталізації</td>
                                <td>ЕКГ (заг. к-сть)</td>
                            </tr>
                            <tr>
                                @for ($i=$key+1; $i <= 32; $i++)
                                    <td>
                                        <input type="text" id="value{{$i}}" class="two" name="value{{$i}}" value="{{$i+1}}">
                                    </td>
                                @endfor
                            </tr>
                        </table>

                        Невідкладна допомога (ПМСД)  22+2=24
                        <table class="table mytable">
                            <tr>
                                @foreach ($region as $key => $reg)
                                    
                                    <td>{{$reg}}<br>
                                        <input type="text" id="value{{$key+33}}" name="value{{$key+33}}" class="two" value="{{$key+34}}">
                                    </td>
                                    @if ( ($key+1) % 9 == 0)
                                        </tr>
                                        <tr>
                                    @endif
                                
                                @endforeach
                            </tr>                         
                        </table>
                    
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                        <input type="submit" value="Save">
                    </div>
                
                </div> 
                    <a href="#templatemo_header" class="gototop">Go To Top</a>
                <div class="cleaner"></div>
            </div> 
            <div class="cleaner"></div>
                <a href="#templatemo_header" class="gototop">Go To Top</a>
            <div class="cleaner"></div>

        </div> 

        <div id="templatemo_footer">
            Copyright © 2048 Your Company Name<br /> Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div> 
    </form>
</div>

@endsection