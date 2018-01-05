
$(document).ready(function(){

	$('#search').keyup(function(){
		var str = $(this).val();
		console.log('hello')
			$.post('data.php',{str:str},function(data){
				$('#tbody').html(data);
			})
	});


});

