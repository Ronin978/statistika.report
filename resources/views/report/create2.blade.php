@extends('layouts.shablon1')

@section('content')

<div id="templatemo_wrapper">
     
    <form id="firstForm" method="POST" action="{{action('ReportController@store2')}}">

        <div id="templatmeo_menu">
            <p align="center">Інформація по запізненнях бригад на виклики за {{$date}}</p>
        </div>
        <div id="templatemo_main">
    	   <div id="home" class="main_box">
        	   <div class="col col-my">
                    <div align="center">
                        
                        <table id="twoTable" border="1">
                            <tr>
                                <td class="firstColumn">№<br>п/п</td>
                                <td>Відділення / пункт що має обслуговувати</td>
                                <td>№ виїзної карти /е(н)</td>
                                <td>Адреса виклику (район)</td>
                                <td>№ Бригада що обслуговувала</td>
                                <td>Час поступлення /Час виїзду/Час прибуття/ Тривалість запізнення (хв.)</td>
                                <td><div class="rotate">постдиспетч підтримка</div></td>
                                <td>Причина запізнення Відсутність вільної бр./ Відстань більше 30км/ Незадовільний стан доріг</td>
                                <td>Привід до виклику /Діагноз /Госпіталізація (відмова)</td>
                            </tr> 
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    <input type="text" name="punkt">
                                </td>
                                <td>
                                    <input type="text" name="no_card">
                                </td>
                                <td>
                                    <input type="text" name="adress">
                                </td>
                                <td>
                                    <input type="text" name="brig">
                                </td>
                                <td>
                                    <input type="text" name="time">
                                </td>
                                <td>
                                    <input type="text" name="support">
                                </td>
                                <td>
                                    <input type="text" name="cause">
                                </td>
                                <td>
                                    <input type="text" name="call">
                                </td>
                            </tr>                           
                                                
                        </table>

                        <button type="button" onclick="AddLine()" >Додати стрічку</button>
                    
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                        <br>
                    </div>

                    <input type="submit" value="Save">
                
                </div> 
                    <div class="cleaner"></div>
                    <div class="gotoback">
                        <p>Back</p>
                        
                    </div>

                    <div onclick="document.getElementById('toDate').value = document.getElementById('firstdate').value; document.getElementById('twoform').submit();" class="gotonext"><p>Next</p></div>

                    
                    
                <div class="cleaner"></div>
            </div> 
            

        </div> 

        <div id="templatemo_footer">
            Copyright © 2048 Your Company Name<br /> Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        </div> 
    </form>


</div>

@endsection