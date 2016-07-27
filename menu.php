
<?php
//<!--Menu-->

$menu_arr = array("Game"=>"game.php", 
			 "WebHotLine"=>"hotwebline.php", 
			 "About"=>"#"
			);

menu_disp($menu_arr);

function menu_disp($name_arr) {
//echo '
//<div class="container-fluid bg-3">';
//echo '<div class="row" style="background-color: #00bcd4;">';
//echo '<div class="collapse navbar-collapse" style="background-color: #00bcd4;">';
echo '
		<nav class="navbar navbar-inverse">
  		<!--<div class="container-fluid">-->
			<div class="navbar-header">
			<a class="navbar-brand" href="./">GAFAM</a>
			</div>
			<ul class="nav navbar-nav">
			<li class="active"><a href="./">Home</a></li>';
    foreach($name_arr as $name => $url) {
	    echo '	

			<li><a href="'.$url.'">'.$name.'</a></li>';


        //echo '
        //
		//<div class="col-sm-2" style="color: #fff;">		
        //<a style="color:#fff;" href="' . $url . '">' . $name . '</a>'
		//
		////<div class="row">'
        ////<span class="label label-info">'+ arr[i].kind + '</span>';
		////</div>';		
		//
		////<div class="row" style="background-color:#ffffff;">';		
		////<div class="col-sm-4 visible-xs-inline visible-sm-block visible-md-block visible-lg-block" >';
        ////<span class="glyphicon glyphicon-heart" onclick="post_love('+arr[i].post_id+')" style="color:pink;"></span><span id="showid_'+arr[i].post_id+'" class="text-info small">'+arr[i].love+'</span>';
		////</div>';
		////</div>';
		//
		//. '</div>';
        
		//'<div class="col-sm-10">';
        //<a href="' + arr[i].url + '">' + '<img src="' + 'img/' + arr[i].thumb +'"' + ' class="img-responsive margin" style="width:100%;" alt="Image">' + '</a>';
        //<a href="' + arr[i].url + '">' + '<img src="' + 'img/' + 'quangcao.png' +'"' + ' class="img-responsive margin" style="width:100%;" alt="Image">' + '</a>';
		//</div>';

	
//<!--
//	<div class="col-sm-4">
//      <p id="id01"></p>
//      <img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
//    </div>
//-->
	}//for
	//echo '
	//<div class="col-sm-6" style="color: #fff; background-color: #00bcd4;">a</div>';
//echo '</div>';
echo '	</ul>
		<!--</div>-->
		</nav>';
//echo '</div>';

}//function
?>	


