
//adding a strike onclick checkbox
$(document).on('change', '.checkbox', function() 
	{
		if($(this).attr('checked')) 
		{
			$(this).removeAttr('checked');
		} 
		else 
		{
			$(this).attr('checked', 'checked');
		}

		$(this).parent().toggleClass('completed');
		
	});
// remove task from list 
	$(document).on('click', '.remove', function() 
	{
		$(this).parent().remove();
		
	});
	// sortable list  drag and drop
$( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );

