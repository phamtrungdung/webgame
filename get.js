
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
function post_element(post_id){
	//var var_name=$("#site_name").val();

    $.get("select_database.php",
    {
        postid: post_id
    },
    function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
		$("#showid_"+post_id).text(data);
    });

};