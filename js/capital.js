
score.capital = {};

score.capital.initDoubleClick = function() {
	
		idname = 0;
		color = '#000000';
		$('tr:odd').css({backgroundColor: '#f9f9f9'});

		$('#allboardrequests').on('dblclick', function(event) {
			//console.log($(event.target).parent().attr('id'));
		if(!(idname == 0)){
	        $('#'+idname).css("background-color", color);
	    }
		
		if(document.selection && document.selection.empty) {
	        	document.selection.empty();
	    	} else if(window.getSelection) {
	        	var sel = window.getSelection();
	        	sel.removeAllRanges();
	    	}

			var idstr = $(event.target).parent().attr('id');
			//console.log(idstr);
			var getId = idstr.replace("main","");
			var searchId = dojo.byId(getId +"info").innerHTML;
			console.log('inner: '+ dojo.byId(getId +"info").innerHTML);
		

			color = $('#'+idstr).css("background-color");
			$('#'+idstr).css("background-color", "rgb(214, 244, 255)");
	    	idname = idstr;
	   	 	//console.log('idname' + idname); 
	    
			score.window.popout('/score/capital/request?_requestId='+ searchId,'800px','1200px');
		}); 

}

score.capital.initDoubleClickRequest = function() {
	
	idname = 0;
	color = '#000000';
	$('tr:odd').css({backgroundColor: '#f9f9f9'});

	$('#allboardrequests').on('dblclick', function(event) {
		//console.log($(event.target).parent().attr('id'));
	if(!(idname == 0)){
        $('#'+idname).css("background-color", color);
    }
	
	if(document.selection && document.selection.empty) {
        	document.selection.empty();
    	} else if(window.getSelection) {
        	var sel = window.getSelection();
        	sel.removeAllRanges();
    	}

		var idstr = $(event.target).parent().attr('id');
		//console.log(idstr);
		var getId = idstr.replace("main","");
		
		$('.reqframe').each(function(i, el) {
			   // As a side note, this === el.
			   if (i % 2 === 0) { 
				   /* we are even */ 
				   $(this).css("background-color", "rgb(249, 249, 249)");
				   }
			   else {
				   /* we are odd */ 
				   $(this).css("background-color", "rgb(255, 255, 255)");
				   }
			});

		color = $('#'+idstr).css("background-color");
		$('#'+idstr).css("background-color", "rgb(214, 244, 255)");
    	idname = idstr;
   	 	//console.log('idname' + idname); 
    
		score.window.popout('/score/capital/request?_requestId='+ getId,'800px','1200px');
	}); 

}