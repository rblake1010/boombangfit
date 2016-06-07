/*

	Username Validation
		* Check if the username matches the regex (requirmements) for the passwords

*/

$('#newUsername').focus(function(){
	$('#newUsernameMsg').show();
});

$('#newUsername').blur(function(){
	$('#newUsernameMsg').hide();
});

$('#newUsername').keyup(function(){ 

	var value      = $(this).val();

	// <li id="condition01">Be a minimum of 5 characters in length,</li>
	if( value.length >= 5 ){ 
		$('#newUsernameMsg .condition01').addClass('true'); 
		numCorrect++;
	}else{
		$('#newUsernameMsg .condition01').removeClass('true'); 
	}

	// <li id="condition02">Include 1 letter,</li>
	if( value.match(/[A-Za-z]/) ){
		$('#newUsernameMsg .condition02').addClass('true');  
		numCorrect++;
	}else{
		$('#newUsernameMsg .condition02').removeClass('true'); 
	}


});