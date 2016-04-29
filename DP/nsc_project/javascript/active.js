$("#new").bind("click",showLightBox);
$("#close").bind("click",closeLightBox);

function showLightBox(){
	$("#zoomIn").css("display","block");
	$(".mask").css("display", "block");
}

function closeLightBox(){
	$("#zoomIn").css("display","none");
	$(".mask").css("display", "none");
}

function getData(name_list,description_list){
	$.ajax({
		url:"insert_data.php",
		data:{
			name : name_list,
			description : description_list
		},
		type:"POST",
		dataType: "text",

		success: function(response) {
			alert(response);
		},
		error: function() {
			alert("what !!!");
        },
        complete: function() {        	
        }
	})
}

