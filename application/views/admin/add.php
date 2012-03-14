<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Добавить тему</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/examples/images/favicon.ico">
    <link rel="apple-touch-icon" href="http://twitter.github.com/bootstrap/examples/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://twitter.github.com/bootstrap/examples/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://twitter.github.com/bootstrap/examples/images/apple-touch-icon-114x114.png">
  <meta name="chromesniffer" id="chromesniffer_meta" content="{&quot;jQuery&quot;:&quot;1.7.1&quot;}"><script type="text/javascript" src="chrome-extension://homgcnaoacgigpkkljjjekpignblkeae/detector.js"></script></head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">Eventador</a>
          
          <div class="nav-collapse">
            <ul class="nav">
              <!--<li class="active"><a href="http://twitter.github.com/bootstrap/examples/hero.html#">Home</a></li>-->
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h3 style="margin:0 auto;">Добавить тему</h3>
        <div>
		<?php echo form_open('admin/add'); ?>
			<table>
			<tr>
				<td> Название лекции: </td>
				<td> <input type="text" name="theme_name"> </td>
			</tr> <tr>	
				<td> Номер аудитории: </td>
				<td><input type="text" name="room"></td>
			</tr>
				<td> Время начала лекции: </td>
				<td><input type="text" name="time"></td>
			</tr> <tr>	
				<td> Продолжительность лекции: </td>
				<td><input type="text" name="duration"></td>
			</tr>	
				<!--тут сделать выбор предмета и преподавателя -->
			</table>
		</div>
        <p><input class="btn" type="submit" value = "Добавить" name="submit"></p>
		</form>
      </div>

            <hr>

      <footer>
        <p>Коля и Максим production</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Bootstrap, from Twitter_files/jquery.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-transition.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-alert.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-modal.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-dropdown.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-scrollspy.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-tab.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-tooltip.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-popover.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-button.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-collapse.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-carousel.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-typeahead.js"></script>

  

</body></html>