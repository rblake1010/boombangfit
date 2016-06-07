/*

	Password Validation
		* Hide/Show password values
		* Check if the password matches the regex (requirmements) for the passwords
		* Check if the password fields match

*/

$('#newPassword').focus(function(){
	$('#newPasswordMsg').show();
});

$('#newPassword').blur(function(){
	$('#newPasswordMsg').hide();
});

$('#newPassword').keyup(function(){ 

	var value      = $(this).val();
	var numCorrect = 0;

	// <li id="condition01">Be a minimum of 8 characters in length,</li>
	if( value.length >= 8 ){ 
		$('#passwordConditions .condition01').addClass('true'); 
		numCorrect++;
	}else{
		$('#passwordConditions .condition01').removeClass('true'); 

	}

	// <li id="condition02">Include 1 uppercase letter,</li>
	if( value.match(/[A-Z]/) ){
		$('#passwordConditions .condition02').addClass('true');  
		numCorrect++;
	}else{
		$('#passwordConditions .condition02').removeClass('true'); 

	}

	// <li id="condition03">Include 1 lowercase letter,</li>
	if( value.match(/[a-z]/) ){
		$('#passwordConditions .condition03').addClass('true'); 
		numCorrect++; 
	}else{
		$('#passwordConditions .condition03').removeClass('true'); 

	}

	// <li id="condition04">Include 1 symbol (e.g. @!#$%^&amp;*),	
	if( value.match(/[@!#$%^&*]/) ){
		$('#passwordConditions .condition04').addClass('true');  
		numCorrect++;
	}else{
		$('#passwordConditions .condition04').removeClass('true'); 

	}

	// <li id="condition05">Include 1 number.</li>
	if( value.match(/[0-9]/) ){
		$('#passwordConditions .condition05').addClass('true');  
		numCorrect++;
	}else{
		$('#passwordConditions .condition05').removeClass('true'); 

	}

	/*
		Change the CSS classes for the status indicators
	*/

	$('#passwordStrength').removeClass('red').removeClass('yellow').removeClass('green');

	if( numCorrect <= 2 ){
		$('#passwordStrength').addClass('red');
	}
	if( numCorrect > 2 && numCorrect < 5 ){
		$('#passwordStrength').addClass('yellow');
	}
	if( numCorrect >= 5 ){
		$('#passwordStrength').addClass('green');
	}

});

/*

	Generic control to hide/show the password text
	the anchor tag needs the class 'passShow' and the href set to the ID of the text field/password to change.
	The script simply changes the input type from password to text (and vice versa)

*/
$('.passShow').click(function(e){
	e.preventDefault();
	var target = $(this).attr('href');
		$(target).focus();		
	if( $(target).attr('type') == 'password' ){
		$(target).attr('type', 'text');
	}else{
		$(target).attr('type', 'password');
	}
});

// matchPassword
// matchPasswordMsg
// newPassword

/*

	Compare the second password field to the first.
	Second password field is only tested on whether it matches the original field

*/

$('#matchPassword').focus(function(){
	$('#matchPasswordMsg').show();
});

$('#matchPassword').blur(function(){
	$('#matchPasswordMsg').hide();
});

$('#matchPassword').keyup(function(){
	if( $(this).val().length <= 0 ){
		$('#matchPasswordMsg p').hide();
	}else{
		if( $(this).val() === $('#newPassword').val() ){
			$('#matchPasswordMsg p.error').hide();
			$('#matchPasswordMsg p.success').show();
		}else{
			$('#matchPasswordMsg p.error').show();
			$('#matchPasswordMsg p.success').hide();
		}

	}

});