
$(document).ready(function() 
    { 
				//initialize table sorting
        $("#appointments").tablesorter();
				
				//build click function on list items,
				$("#submit").click(function(){
					$_SESSION['comments'] = $("#comments").html();
				});
				$(".select").click(function(){
					//collect variables from selected
					var select=$(this).attr('id');
							
					
					//populate update box
					console.log(list[select]);
					$("#TableID").val(list[select][0]);
					$("#name").html(list[select][2] + ", " + list[select][1]);
					$("#status").val(list[select][13]);
					$("#lastmod").val(list[select][14]);
					$("#email").val(list[select][3]);
					$("#phone").val(list[select][9]);
					$("#contact").val(list[select][8]);
					$("#days").val(list[select][10]);
					$("#time").val(list[select][11]);
					$("#location").val(list[select][12]);
					$("#type1").html(list[select][4]);
					$("#type2").html(list[select][5]);
					$("#type3").html(list[select][6]);
					var comments = list[select][15];
					$("#comments").html(comments);
					
					
					/* $("#name").val($(name).text());
					$("#name").attr('readonly', 'readonly');
					$("#location").val($(location).text()); */
					
					
					//show update box
					$("#box").css("visibility", "visible");
					$("#container").css("visibility","hidden");
					
				});
    } 
); 
function hideBox(){
	//Hide update box
	$("#box").css("visibility", "hidden");
	$("#container").css("visibility","visible");
}