<html>
<head>
<title>Zhas ulan</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
<script src="js/src/jquery.js"></script>
<script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.inpt{
  opacity: 0;
  width: 100%;
  height: 100%;
  position: absolute;
  left: 14px;
}
</style>
<script type="text/javascript">
function reg(){
  var e = document.getElementById('x').style.display;
  if( e == 'none' ){
        document.getElementById('x').style.display = 'block';       
    }
    else document.getElementById('x').style.display = 'none';
}
function log(){
  var e = document.getElementById('log').style.display;
  if( e == 'none' ){
        document.getElementById('log').style.display = 'block';       
    }
    else document.getElementById('log').style.display = 'none';
}
</script>

<script type="text/javascript">
var lastResFind=""; // последний удачный результат
var copy_page=""; // копия страницы в ихсодном виде
function TrimStr(s) {
     s = s.replace( /^\s+/g, '');
  return s.replace( /\s+$/g, '');
}
function FindOnPage(inputId) {//ищет текст на странице, в параметр передается ID поля для ввода
  var obj = window.document.getElementById(inputId);
  var textToFind;
 
  if (obj) {
    textToFind = TrimStr(obj.value);//обрезаем пробелы
  } else {
    alert("Введенная фраза не найдена");
    return;
  }
  if (textToFind == "") {
    alert("Вы ничего не ввели");
    return;
  }
  
  if(document.body.innerHTML.indexOf(textToFind)=="-1")
  alert("Ничего не найдено, проверьте правильность ввода!");
  
  if(copy_page.length>0)
        document.body.innerHTML=copy_page;
  else copy_page=document.body.innerHTML;

  
  document.body.innerHTML = document.body.innerHTML.replace(eval("/name="+lastResFind+"/gi")," ");//стираем предыдущие якори для скрола
  document.body.innerHTML = document.body.innerHTML.replace(eval("/"+textToFind+"/gi"),"<a name="+textToFind+" style='background:red'>"+textToFind+"</a>"); //Заменяем найденный текст ссылками с якорем;
  lastResFind=textToFind; // сохраняем фразу для поиска, чтобы в дальнейшем по ней стереть все ссылки
  window.location = '#'+textToFind;//перемещаем скрол к последнему найденному совпадению
 } 
</script>

<script type="text/javascript" src="high44/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="high44/highslide/highslide.css" />
<script type="text/javascript">
	hs.graphicsDir = 'high44/highslide/graphics/';
	hs.align = 'center';
	hs.align = 'center';
  hs.transitions = ['expand', 'crossfade'];
  hs.outlineType = 'rounded-white';
  hs.wrapperClassName = 'controls-in-heading';
  hs.fadeInOut = true;

hs.addSlideshow({
    //slideshowGroup: 'group1',
    interval: 5000,
    repeat: false,
    useControls: true,
    fixedControls: 'fit',
    overlayOptions: {
      opacity: .75,
      position: 'bottom center',
      hideOnMouseOut: true
    }
  });

</script>



</head>
	<link href="style.css" rel = "stylesheet" type = "text/css"/>

<body>

<div class="container-fluid">
    <!-- Second navbar for search -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Главная страница</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" onClick="log()" name='Submit'>Войти</a></li>
            
            <li>

<a href="#" onClick="reg()" name='Submit'>Регистрация</a>
            </li>
            
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
	                                    class="nav-icon-products add-user"></i>Контакты <b class="caret"></b></a>
	                                    <ul class="dropdown-menu">
	                                        <li class="dropdown-submenu">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-earphone"></span>
												 Телефоны</a>
												<ul class="dropdown-menu">
													<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">7(7172)530773</a></li>
													<li><a href="#!">7(7172)530780</a></li>
													<li><a href="#!">7(7172)530790</a></li>
												</ul>
												
										
	                                        <li class="dropdown-submenu">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												 <span class="glyphicon glyphicon-road"></span>Адрес</a>
												<ul class="dropdown-menu">
													<li><a href="#!"> 010000, г.Астана, Левый берег, Коргалжинское шоссе, дом 16/</a></li>
												</ul>
												</ul>
											</li>
												</li>
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" id="text-to-find" placeholder="Search" />
              </div>
              <button type="submit" class="btn btn-danger" onclick="javascript: FindOnPage('text-to-find'); return false;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
		
      </div><!-- /.container -->
	  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/1.jpg">
    </div>

    <div class="item">
      <img src="images/2.jpg">
    </div>

    <div class="item">
      <img src="images/3.jpg">
    </div>

    <div class="item">
      <img src="images/4.jpg">
    </div>
	  <div class="item">
      <img src="images/5.jpg">
    </div>
	  <div class="item">
      <img src="images/6.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </nav><!-- /.navbar -->
      
      <div id="log" style="display:none"><?php include"log.php"; ?>
  </div>

      <div id="x" style="display:none"><?php include"reg.php"; ?>
  </div>
  

<div class="row" style=" box-shadow: 0 0 40px rgba(0,0,0,0.9);padding: 10px;background-color:rgba(0,0,0,0.5);">
	<div class="col-md-6"style=" box-shadow: 0 0 40px rgba(0,0,0,0.9);padding: 10px;background-color:rgba(0,0,0,0.5);">
    <a hover style = "text-decoration:none;" href = "http://localhost/Zhas%20ulan/news.php">
    <h4 style="text-align:center">Новости</h4></a>
		
    <div class="col-md-6"><a>
     <?php include"1.php"; ?></div>
		
    <div class="col-md-6"><a>
     <?php include"2.php" ?>
    </div>
		
    <div class="col-md-6"><a>
     <?php include "3.php" ?>
    </div>
		
    <div class="col-md-6"><a>
      <?php include"4.php" ?>
     </div>
        
   </div>


 <div class="col-md-6"><a hover style = "text-decoration:none;" href = "http://localhost/Zhas%20ulan/news.php"><h4 style="text-align:center">Наши уланы</h4></a>


<div class="highslide-gallery col-md-6" style=" box-shadow: 0 0 40px rgba(0,0,0,0.9);padding: 10px;background-color:rgba(0,0,0,0.5);">
  <p class="leftstr"><p style="color:red;text-align:center;shadow: 0 0 7px;">Как бы вы не судили улана,он отдал своей Родине самое главное-свое детство.
А это очень дорого стоит.</p>

<a href = "images/new15.jpg" class="highslide" onclick="return hs.expand(this)">
<img class="img-rounded" width="110px" height="112px" src="images/new15.jpg" title="Click to enlarge" />
</a>
<div class="highslide-caption">
  Caption for the first image.
</div>

<a href = "images/new11_big.jpg" class="highslide" onclick="return hs.expand(this)">
  <img class="img-rounded" width="110px" height="112px" src="images/new11_big.jpg" title="Click to enlarge" /></a>
  <div class="highslide-caption">
  Caption for the second image.
</div>


<a href = "images/new14.jpg" class="highslide" onclick="return hs.expand(this)">
  <img class="img-rounded" width="110px" height="112px" src="images/new14.jpg" title="Click to enlarge" /></a>
<div class="highslide-caption">
  ption for the second image.
</div>

 <a href = "images/new21.jpg" class="highslide" onclick="return hs.expand(this)">
  <img class="img-rounded" width="110px" height="112px" src="images/new21.jpg" title="Click to enlarge" /></a>
 <div class="highslide-heading">
  Heading for the first image.
</div>

<div class="highslide-caption">
  Caption for the second image.
</div>

 <a href = "images/new12.jpg" class="highslide" onclick="return hs.expand(this)">
  <img class="img-rounded" width="110px" height="112px" src="images/new12.jpg" title="Click to enlarge" /></a>

<div class="highslide-caption">
  Caption for the second image.
</div>

<a href = "images/new13.jpg" class="highslide" onclick="return hs.expand(this)">
<img class="img-rounded" width="110px" height="112px" src="images/new13.jpg" title="Click to enlarge" />
</a>

<div class="highslide-caption">
  Caption for the second image.
</div>

<a href = "images/ulan7.jpg" class="highslide" onclick="return hs.expand(this)">
<img class="img-rounded" width="110px" height="112px" src="images/ulan7.jpg" title="Click to enlarge" />
</a>
<a href = "images/new8.jpg" class="highslide" onclick="return hs.expand(this)">
<img class="img-rounded" width="110px" height="112px" src="images/new8.jpg" title="Click to enlarge" />
</a>

<div class="highslide-caption">
  Caption for the second image.
</div>

</a><p><div><a href = "http://localhost/Zhas%20ulan/news.php"></a></div></p></p></div>
<div><p style="text-align:center;color:white;">Зажигательное поздравление Жас улановцев с 8 марта!</p><video width="280" height="240" controls>
  <source src="videos/Зажигательное поздравление Жас улановцев с 8 марта!.mp4" type="video/mp4"> 
  <source src="movie.ogg" type="video/ogg">
  Зажигательное поздравление Жас улановцев с 8 марта!
</video>
<p style="text-align:center;color:white;">Документальный фильм о Жас Улане</p><video width="280" height="240" controls>
  <source src="videos/дф Жас Улан2.mp4" type="video/mp4"> 
  <source src="movie.ogg" type="video/ogg">
Документальный фильм о Жас Улане
</video>
</div></div>
</div>




 <div class="row">

    <div class="col-md-5">
       <img style="max-height:100%;max-width:100%;margin: auto;" class="img-rounded" width="500px" height="680px" vspace="50" src="images/fone.jpg" title="Click to enlarge" />
    </div>

    
    <div class="col-md-7">
      <h1 style = "text-align:center;">
        Добро пожаловать
    </h1> 
      <p class = "seven">
  Официальный сайт Республиканской школы «Жас улан» предназначен для широкого круга  пользователей.
  Наш сайт освещает следующие основные направления:<br>
- правила приема в Республиканскую школу «Жас улан»;<br>
- исторические сведения о Школе (с момента открытия  4 ноября 1999 года до настоящего времени) с фото- и видеоматериалами;<br>
- новости школьной жизни;<br>
- достижения учащихся, преподавателей, военнослужащих и выпускников Школы;<br>
- информацию о контактах с должностными лицами Школы;<br>
- информацию о государственных закупках.<br>
  Сайт  предоставляет возможность родителям, чьи дети планируют поступление в Школу,
 получить ответы на интересующие вопросы о вступительных мероприятиях от должностных лиц Школы посредством электронной почты,
 ознакомиться с условиями обучения, проживания, особенностями воспитательного процесса, организацией досуга в свободное время. 
Все посетители сайта могут здесь найти информацию об истории создания Школы 
– первого в независимом Казахстане военного учебного заведения среднего общего образования, 
созданного по инициативе Президента – Нурсултана Абишевича Назарбаева,
 ее традициях, достижениях не только в текстовом изложении, 
 но и в представленном здесь фото- и видеоархиве, являющимся уникальным материалом, собранным на протяжении всех лет существования Школы. 
  Материалы сайта могут быть широко использованы  учителями типовых школ при подготовке «Уроков мужества,
   чести и достоинства», других воспитательных мероприятий по патриотическому воспитанию учащихся.<br>
  Наш сайт – это возможность встречи на нем одноклассников – выпускников Школы, 
которые служат или трудятся сейчас во всех уголках нашей большой страны. 
Это возможность для нынешних молодых офицеров передать свой опыт младшим братишкам, 
обучающимся теперь в «Жас улане». Это возможность вспомнить золотые годы учебы в Школе, 
возможность порадоваться за новые успехи жасулановцев, 
возможность преемственности между различными поколениями нурмагамбетовцев.
 Это возможность общения и обмена опытом  преподавателей и учащихся кадетских школ СНГ с целью формированию 
 у подрастающих граждан высокой социальной активности, гражданской ответственности,
  духовности, позитивных ценностей и качеств, которые они могут применить в интересах устойчивого развития Отечества и укрепления государства.
  </p>
  </div>
</div>

<div style="background: rgb(250,250,250);box-shadow: 8px 8px 10px black;">
  <div class="row"style="max-height:100%;max-width:100%;margin: auto;">

    <div class="col-md-8"   >
      <p style="margin-left: 30;" >
  Адрес: 010000, г.Астана, Левый берег, Коргалжинское шоссе, дом 16/1<br>
  Телефоны для справки: Дежурная часть: +7(7172)47-40-97<br>
  Факс: +7(7172)47-40-96<br>
  e-mail: jasulan2005@mail.ru<br>
      </p>
</div>


        <div id="ex5" class="col-md-1">
           <a href = "https://metrika.yandex.ru/list?" target="_blank">
              <img  vspace="0" src="images/icon1.gif"/>
            </a>
         </div>

         <div id="ex5" class="col-md-1">
           <a href = "https://www.openstat.com/" target="_blank">
              <img  vspace="0" src="images/icon2.png"/>
            </a>
         </div>

         <div id="ex5" class="col-md-1">
           <a href = "http://www.liveinternet.ru/" target="_blank">
              <img  vspace="0" src="images/icon3.gif"/>
            </a>
         </div>

   

  </div>

  <div>
</div>
</div>

</div>
</body>
</html>