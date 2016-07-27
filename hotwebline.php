<?php
include("header.php");
?>

<?php
include("menu.php");
?>

<!-- Body part-->
<div class="container-fluid bg-3">   
	<p id="id01"></p> 
<!--
	<div class="col-sm-4">
      <p id="id01"></p>
      <img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
-->
<p style="text-align:center;"> <button class="btn-link"> Load More</button> </p>
</div>

<script>
function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i<arr.length; i++) {
		out+='<div class="col-sm-2">';
		
		out+='<div class="row">'
        out += '<a href="' + arr[i].url + '">' + arr[i].display + '</a>';
		out+='</div>';
		
		out+='<div class="row">'
        out += '<span class="label label-info">'+ arr[i].kind + '</span>';
		out+='</div>';		
		
		out+='<div class="row" style="background-color:#ffffff;">';
		out+='<div class="col-sm-4 visible-xs-inline visible-sm-block visible-md-block visible-lg-block" >';
        out += '<span class="glyphicon glyphicon-heart" onclick="post_love('+arr[i].post_id+')" style="color:pink;"></span><span id="showid_'+arr[i].post_id+'" class="text-info small">'+arr[i].love+'</span>';
		out+='</div>';
		out+='<div class="col-sm-4 visible-xs-inline visible-sm-block visible-md-block visible-lg-block">';
        out += '<span class="glyphicon glyphicon-comment" onclick="post_comment('+arr[i].post_id+')" style="color:lightblue;"></span>';
		out+='</div>';
		out+='<div class="col-sm-4 visible-xs-inline visible-sm-block visible-md-block visible-lg-block">';
        out += '<span class="glyphicon glyphicon-flag" style="color:lightblue;"></span>';
		out+='</div>';
		out+='</div>';
		//out+='<p id="showid_'+arr[i].post_id+'">'+arr[i].post_id+'</p>';
		out+='</div>';
		//
		/*
		out+='<div class="col-sm-2 col-xs-2" >';
		out+='<div class="row">'
        out += 'Empty';
		out+='</div>';
		out+='</div>';
		*/
		//
		out+='<div class="col-sm-10">';
        out += '<a href="' + arr[i].url + '">' + '<img src="' + 'img/' + arr[i].thumb +'"' + ' class="img-responsive margin" style="width:100%;" alt="Image">' + '</a>';
        //out += '<a href="' + arr[i].url + '">' + '<img src="' + 'img/' + 'quangcao.png' +'"' + ' class="img-responsive margin" style="width:100%;" alt="Image">' + '</a>';
		out+='</div>';
    }
    //document.getElementById("id01").innerHTML = out;
	//$("#id01").html(out);
	$("#id01").append(out);
    //document.getElementsByClassName("margin").innerHTML = out;
	
}
</script>

<!--<script src="link.js"></script>-->
<script src="get.js"></script>
<script>
$(function(){
    $("button").click(function(){
		display_post();
    });
});
</script>
<script>
function post_love(pid){
	//var pid=$("#showid").text();
	//alert(pid);
	post_element(pid);	
}
function post_comment(pid){
	//var pid=$("#showid").text();
	//alert(pid);
	post_element(pid);	
}
</script>

<!-- Footer part-->
<?php
include("footer.php");
?>