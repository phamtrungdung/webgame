<!--
<!DOCTYPE html>

<html lang="en">
<head>
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
  <h2>Export database</h2>
  <p class="label-info" id="message_success"> Let AJAX change it</p>
</div>

-->
<script>

function display_post(){
	var arr;
    $.get("export_database.php",
    function(data, status){
		$("#message_success").text(data);
		arr=JSON.parse(data);
		myFunction(arr);
    });
};
display_post();
</script>
<!--
</body>
</html>
-->