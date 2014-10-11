<script>
	/* feedback handler */
	$('document').ready(function(){
		$('#feedbox').css({display:"none"});
		
		/*on feedback button click*/
		$('#feedback').click(function( event ){
			event.preventDefault();
			$("div[role='main']").toggle();
			$('#feedbox').toggle();
		});
		
		/*manage form elements*/
		$('#nav_text').hide(); 
		  $('#asmnt_text').hide();
		  $('#usage_text').hide();
	    $("input[name='assessment']").change(function(){
				if( this.id === 'asmnt_no' )
						$('#asmnt_text').slideDown('slow'); 
          else if( $('#asmnt_text').is(':visible') )
            $('#asmnt_text').slideUp('slow');         		
      }); 
		  $("input[name='navigation']").change(function(){
		    if( this.id === 'nav_no' )
            $('#nav_text').slideDown('slow'); 
          else if( $('#nav_text').is(':visible') )
            $('#nav_text').slideUp('slow'); 
		  });
		  $("input[name='usage']").change(function(){
		    if( this.id === 'usage_no' )
						$('#usage_text').slideDown('slow'); 
          else if( $('#usage_text').is(':visible') )
            $('#usage_text').slideUp('slow'); 
		  });
		/*Handle submit*/
		$('#submitFeedback').click(function( event ){
			event.preventDefault();
			$.post('feedback_test.php', $('#feedbackForm').serialize());
			$("div[role='main']").toggle();
			$('#feedbox').toggle();
		});
	});
	
	
</script>

<div id="feedbox">
		<div data-role="form" >
			<h3>Please share your feedback to help us improve our app.</h3>
			<form id="feedbackForm" method="POST" action="feedback_test.php">	
				<div data-role="fieldcontain">	
					<fieldset data-role="controlgroup"> 
						<legend>Did you like the assessment?</legend> 											
							<label for="asmnt_yes">Yes</label> 	 
							<input  type="radio" name="assessment" id="asmnt_yes" value="Yes">					
							<label for="asmnt_no">No</label> 			
							<input  type="radio" name="assessment" id="asmnt_no" value="No">
					</fieldset>
				</div>
				<div id="asmnt_text" data-role="fieldcontain">
					<label for="asmnt_comment">Assessment suggestions</label>
					<textarea name="asmnt_comment" id="asmnt_comment" value=""></textarea>
				</div>				
				<div data-role="fieldcontain">	
					<fieldset data-role="controlgroup"> 
						<legend>Was the app navigation clear?</legend> 											
							<label for="nav_yes">Yes</label> 	 
							<input  type="radio" name="navigation" id="nav_yes" value="Yes">					
							<label for="nav_no">No</label> 			
							<input  type="radio" name="navigation" id="nav_no" value="No">
					</fieldset>
				</div>
				<div id="nav_text" data-role="fieldcontain">
					<label for="nav_comment">Navigation suggestions</label>
					<textarea name="nav_comment" id="nav_comment" value=""></textarea>
				</div>
				<div data-role="fieldcontain">	
					<fieldset data-role="controlgroup"> 
						<legend>Was the app easy to use?</legend> 											
							<label for="usage_yes">Yes</label> 	 
							<input  type="radio" name="usage" id="usage_yes" value="Yes">					
							<label for="usage_no">No</label> 			
							<input  type="radio" name="usage" id="usage_no" value="No">			
					</fieldset>					
				</div>	
				<div id="usage_text" data-role="fieldcontain">
					<label for="nav_comment">Usability suggestions</label>
					<textarea name="usage_comment" id="usage_comment" value=""></textarea>
				</div>				
				<div data-role="fieldcontain">
					<label for="comment">Any additional feedback</label> 
					<textarea name="comment" id="comment" value=""></textarea>
				</div>
				<input id="submitFeedback" type="submit" value="Submit">
			</form>
		</div>
	</div>


<div data-role="footer" data-position="fixed" data-tap-toggle="false" data-theme="a"><!-- opening footer div-->   
	<p id="footer">| 
		<a href="http://www.mccneb.edu">MCC Home</a> | 
		<a href="http://www.mccneb.edu/careercenter/">MCC Career Services</a> | 
		<a href="feedback.php">
			<img src="assets/images/feedback.png" id="feedback" width="32" height="32" alt="Please share your feedback to help us improve our mobile web application">
		</a>
	<br> Metropolitan Community College<br>Copyright © 2014, All Rights Reserved.</p>
</div><!-- footer Closing div --> 


	