
	$('form[name=gradeoutput]').submit(function(e){
		e.preventDefault();
	    var itemname = $("input[name=itemname]").val();
		var desc = $("input[name=desc]").val();
		var qty = $("input[name=qty]").val();

		$.post('zed_exercise_day3.php',{'itemname':itemname,'description':desc,
								'quantity':qty},function(response){
		  var parse = JSON.parse(response);
		if(parse['err']){
		   $("div#response").html('<p><font style="color:red;">error on page</font><p>');
		}else{
		   $("div#response").html('<strong><font style="color:green;background:#eeeee">Successful add!</font></strong');
		}
		});

	 });

