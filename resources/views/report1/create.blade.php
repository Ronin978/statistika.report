@extends('layouts.shablon1')

@section('content')

<div id="templatemo_wrapper">
    
    <div id="templatemo_main">
    	<div id="home" class="main_box">
        	<div class="col col_23">
                РАПОРТ старших лікарів змін Матушевської Н.І., Костюк В.С.  за чергування 
                {{date("l / «d» F Y")}}.
                <form id="firstForm" method="POST" action="{{action('FrontController@store')}}">
                    
                    <input type="date" name="date" value="{{date('Y-m-d')}}"> 
                    <br><br>

                    <table class="table mytable">
                        <tr>
                            <td class="firstColumn">
                                                            
                            </td>
                            <td>
                                День
                            </td>
                            <td>
                                Ніч
                            </td>
                            <td>
                                Всього
                            </td>
                        </tr>
                        <tr>
                            <td class="firstColumn">
                                Прийнято викликів
                            </td>
                            <td>
                                <input type="text" name="day1">                          
                            </td>
                            <td>
                                <input type="text" name="night1">                           
                            </td>
                            <td>
                                                            
                            </td>
                        </tr>
                        <tr>
                            <td class="firstColumn">
                                Передано на невідкладну допомогу
                            </td>
                            <td>
                                <input type="text" name="day2">
                            </td>
                            <td>
                                <input type="text" name="night2">                           
                            </td>
                            <td>
                                                            
                            </td>
                        </tr>
                        <tr>
                            <td class="firstColumn">
                                Поради (заг. к-сть)
                            </td>
                            <td>
                                <input type="text" name="day3">
                            </td>
                            <td>
                                <input type="text" name="night3">                           
                            </td>
                            <td>
                                                            
                            </td>
                        </tr>
                        <tr>
                            <td class="firstColumn">
                                Передано іншим відділенням
                            </td>
                            <td>
                                <input type="text" name="day4">
                            </td>
                            <td>
                                <input type="text" name="night4">                           
                            </td>
                            <td>
                                                            
                            </td>
                        </tr>
                        <tr>
                            <td class="firstColumn">
                                Виконано виїздів
                            </td>
                            <td>
                                <input type="text" name="day5">
                            </td>
                            <td>
                                <input type="text" name="night5">                           
                            </td>
                            <td>
                                                            
                            </td>
                        </tr>
                    </table>
                
                    <table class="table mytable">
                        <tr>
                            <td>
                                Доставлено на госпіталізацію                            
                            </td>
                            <td>
                                Госпіталізовано
                            </td>
                            <td>
                                Не госпіталізовано
                            </td>
                            <td>
                                Відмова від госпіталізації
                            </td>
                            <td>
                                ЕКГ (заг. к-сть)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    </table>

                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                    <input type="submit" value="Save">
                </form>



                <div class="cleaner h40"></div>
               
			</div>
            <div class="col col_13 no_margin_right">
            	<h3>Швидкий пошук</h3>
                <blockquote>
                    <form id="sidebar" method="POST" action="{{action('FrontController@QuickFind')}}">
                        <input type="text" name="find" >

                        <input type="submit" value="Знайти">
				    </form>
                </blockquote>
                <h3>Детальний пошук</h3>
                <blockquote>
					
				</blockquote>
                
                <div class="cleaner h40"></div>
                
            	<h3>Пошук рапортів</h3>
                
                <blockquote>
                    <input type="text" name="find">
                </blockquote>

                <ul class="twitter_post">
                	<li>Suspendisse at scelerisque urna. Aenean tincidunt massa in tellus varius ultricies. <a href="#">http://bit.ly/13IwZO</a></li>
                    <li>Aliquam odio nibh, suscipit quis venenatis vitae, fringilla at quam. <a href="#">http://bit.ly/PPIwP</a></li>
                    <li>Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula, quis viverra tellus nulla odio. <a href="#">http://bit.ly/I9IUY</a></li>
                </ul>
            </div>
            <div class="cleaner"></div>
            <a href="#templatemo_header" class="gototop">Go To Top</a>
            <div class="cleaner"></div>
		</div> <!-- END of home -->
        
        
            <div class="cleaner"></div>
            <a href="#templatemo_header" class="gototop">Go To Top</a>
            <div class="cleaner"></div>
		
    </div> <!-- END of -->
    
    <div id="templatemo_footer">
    	Copyright © 2048 Your Company Name<br /> Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div> 
</div> 

@endsection