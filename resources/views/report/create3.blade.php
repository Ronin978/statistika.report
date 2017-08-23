@extends('layouts.shablon1')

@section('content')

<div id="templatemo_wrapper">
     
    <form id="firstForm" method="POST" action="{{action('ReportController@store3')}}">

        <div id="templatmeo_menu">
            <p align="center">Інформація по запізненнях бригад на виклики за Date</p>
        </div>
        <div id="templatemo_main">
    	   <div id="home" class="main_box">
        	   <div class="col col-my">
                    <div align="center">
                        <table class="mytable">
                            <tr>
                                <td class="firstColumn"></td>
                                <td>День</td>
                                <td>Ніч</td>
                                <td>Всього</td>
                            </tr>                            
                                                
                        </table>
                    
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                        <br>
                    </div>

                    <input type="submit" value="Save">
                
                </div> 
                    
                    <a href="{{action('ReportController@create4')}}" class="gotonext">Next</a>
                <div class="cleaner"></div>
            </div> 
            

        </div> 

        <div id="templatemo_footer">
            Copyright © 2048 Your Company Name<br /> Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div> 
    </form>


</div>

@endsection