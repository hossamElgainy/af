$('document').ready(function()
{
    //show and hide 'add comment' section
    $(".comment-btn").click(function()
    {
    $(".add-comment").slideToggle(); 
    });

    //Add question 
	$('#add-question-form' ).submit(function(e){
		e.preventDefault();
	    e.stopImmediatePropagation();
	        
	    var data = $('#add-question-form').serialize();
		
		$.ajax({
			url : "add_question.php", 
			type : "POST", 
			data : data, 
			beforeSend : function(){
				//$("" ).html('');
			}, 
			success:  function(data){
				$('.showed-question').prepend(data);
				$('#add-question-form').find("input[type=text], textarea").val("");

			}
		});
		return false ;
	});


});