$(document).ready(function(){

	$("button").click(function(){

		$.get("consulta.php", function(data, status){

			$("#usuarios").html(data);

		});

	});

});