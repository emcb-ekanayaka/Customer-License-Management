$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"../a_dmin4De_-v+04licens-e/search.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});