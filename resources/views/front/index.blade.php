@extends('layouts.shablon1')

@section('content')

<div id="templatemo_wrapper">
    
    <div id="templatmeo_menu">
    	<ul>
        	<li><a href="#home" class="home"><span></span></a></li>
            <li><a href="#about" class="about"><span></span></a></li>
            <li><a href="#portfolio" class="portfolio"><span></span></a></li>
            <li><a href="#services" class="services"><span></span></a></li>
            <li><a href="#contact" class="contact"><span></span></a></li>
		</ul>
        <br>
        <hr>
        <ul>
            <li><a href="#home" class="home"><span></span></a></li>
            <li><a href="#about" class="about"><span></span></a></li>
            <li><a href="#portfolio" class="portfolio"><span></span></a></li>
            <li><a href="#services" class="services"><span></span></a></li>
            <li><a href="#contact" class="contact"><span></span></a></li>
        </ul>
    </div>
    
    <div id="templatemo_main">
    	<div id="home" class="main_box">
        	<div class="col col_23">
            	<img src="images/templatemo_image_01.jpg" alt="image" class="img_frame" />
                РАПОРТ старших лікарів змін Матушевської Н.І., Костюк В.С.  за чергування Дата рапорту.

                <table class="table mytable">
                    <tr>
                        <td class="firstColumn"></td>
                        <td>День</td>
                        <td>Ніч</td>
                        <td>Всього</td>
                    </tr>
                    <tr>
                        <td class="firstColumn">Прийнято викликів</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="firstColumn">
                            Передано на невідкладну допомогу
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="firstColumn">
                            Поради (заг. к-сть)
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="firstColumn">
                            Передано іншим відділенням
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="firstColumn">
                            Виконано виїздів
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
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
                </table>

                <div class="cleaner h40"></div>
                <h3>Our Service Lists</h3>
                <ul class="tmo_list">
                    <li>Nulla facilisi. Maecenas ac odio ipsum donec cursus</li>
                    <li>Fusce risus tortor, interdum in malesuada pulvinar</li>
                    <li>Proin facilisis ullamcorper turpis, in placerat</li>
                    <li>Sed vel justo quis ligula blandit commodo molestie</li>
                    <li>Ut tristique sagittis arcu, vel laoreet turpis</li>
                </ul>
			</div>
            <div class="col col_13 no_margin_right">
            	<h3>Швидкий пошук</h3>
                <blockquote>
                    <form method="POST" action="{{action('FrontController@QuickFind')}}">
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