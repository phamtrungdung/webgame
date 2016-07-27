<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="exstyle.css">
  
</head>

<body>


<div class="container">
  <h2 class="label-info">Input database</h2>
  <form class="form-horizontal" role="form" action="">
    <div class="form-group has-success">
      <label class="col-sm-2 control-label" for="inputSuccess">Site name</label>
      <div class="col-sm-10">
        <input class="form-control" id="site_name" type="text" value="">
      </div>
    </div>
	<div class="form-group has-success">
      <label class="col-sm-2 control-label" for="inputSuccess">Image</label>
      <div class="col-sm-10">
        <input class="form-control" id="site_image" type="text" value="">
      </div>
    </div>
	

    <div class="form-group has-success has-feedback">
      <label class="col-sm-2 control-label" for="inputSuccess">Site Attribute</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="site_attr" value="">
      </div>
    </div>
    <div class="form-group has-warning has-feedback">
      <label class="col-sm-2 control-label" for="inputWarning">Site URL</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="site_url" value="">
      </div>
    </div>
	<div>
	  <p class="label-info" id="message_success"> Let AJAX change it</p>
	  <button type="button" class="btn btn-info" <!--onclick="sendData()-->">Send</button>
	</div>
  </form>
</div>


<script>
$("button").click(function(){
	var var_name=$("#site_name").val();
	var var_image=$("#site_image").val();
	var var_attr=$("#site_attr").val();
	var var_url=$("#site_url").val();
    $.post("import_database.php",
    {
        sitename: var_name,
        siteimage: var_image,
        siteattr: var_attr,
        siteurl: var_url
    },
    function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
		$("#message_success").text(data);
    });
});
</script>
<script>
//function sendData() {
//  var xhttp = new XMLHttpRequest();
//  //document.getElementById("message_success").innerHTML = "Hello World";
//  var name=document.getElementById("site_name").value;
//  var image=document.getElementById("site_image").value;
//  //document.write(name);
//  //document.write(image);
//  xhttp.onreadystatechange=function() {
//    if (xhttp.readyState == 4 && xhttp.status == 200) {
//      document.getElementById("message_success").innerHTML = xhttp.responseText;
//    }
//  };
//  
//  xhttp.open("GET", "import_database.php?q="+name&k=, true);
//  xhttp.send();
//}
</script>
</body>
</html>