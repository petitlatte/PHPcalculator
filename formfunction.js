$( document ).ready(function() {

    $("#text2").attr("disabled", true);
    $("#text3").attr("disabled", true);
    $("#text4").attr("disabled", true);

		$(".radiobtn").click(function() {

		    if ($("input[name=shape]:checked").val() == "circle") {
		        $("#text1").attr("disabled", false);
		        $("#text2").attr("disabled", true);
		 		$("#text3").attr("disabled", true);
		 		$("#text4").attr("disabled", true);
		    } else if ($("input[name=shape]:checked").val() == "square") {
		        $("#text1").attr("disabled", true);
		        $("#text2").attr("disabled", false);
		 		$("#text3").attr("disabled", true);
		 		$("#text4").attr("disabled", true);
		    } else if ($("input[name=shape]:checked").val() == "rectangle") {
		        $("#text1").attr("disabled", true);
		        $("#text2").attr("disabled", true);
		 		$("#text3").attr("disabled", false);
		 		$("#text4").attr("disabled", false);
		    } else {
		    	console.log("try again");
		    }

		});


});