
//pak string na de # in de url
var code = window.location.hash.substr(1);

//textregistratie controller 

$(document).ready(function(){
	$('.btn-success').on('click', function(){
		$('.first-text').hide();
		$('.var-text-succes').slideToggle();
		$('.choice').hide();
	});

	$('.btn-danger').on('click', function(){
		$('.first-text').hide();
		$('.var-text-fail').slideToggle();
		$('.choice').hide();
	});

	$('.second-choice').on('click', function(){
		$('.first-text').hide();
		$('.var-text-success').slideToggle();
		$('.var-text-fail').hide();
	});



});

//zet in localstorage als een van onderste codes in de url mee komt.
if (code == 135) 
{
var puzzlecode1 = localStorage.setItem('puzzlecode1', code);
} 
else if (code == 246)  
{
var puzzlecode2 = localStorage.setItem('puzzlecode2', code);
}
else if (code == 468)
{
var puzzlecode3 = localStorage.setItem('puzzlecode3', code);
}
else if (code == 6810)
{
var puzzlecode4 = localStorage.setItem('puzzlecode4', code);
}
else if (code == 357)
{
var puzzlecode5 = localStorage.setItem('puzzlecode5', code);
}
else if (code == 789)
{
var puzzlecode6 = localStorage.setItem('puzzlecode6', code);
}

// laat puzzelstukken zien als een van de codes in localstorage staat.
if (localStorage.getItem("puzzlecode1") !== null) 
{
	$('.piece:first').addClass('piece-1').animate({'opacity':1}, 1000);
	$('.panel-heading:first').css('background', '#97E078');
    $('.panel-heading:first .done').html('<img src="img/quest_closed.png">');
} 

if (localStorage.getItem("puzzlecode2") !== null)
{
	$('.piece:nth-of-type(2)').addClass('piece-2').animate({'opacity':1}, 1000);
	$('.panel-heading:eq(1)').css('background', '#97E078');
    $('.panel-heading:eq(1) .done').html('<img src="img/quest_closed.png">');
}

if (localStorage.getItem("puzzlecode3") !== null)
{
	$('.piece:nth-of-type(3)').addClass('piece-3').animate({'opacity':1}, 1000);
	$('.panel-heading:eq(2)').css('background', '#97E078');
    $('.panel-heading:eq(2) .done').html('<img src="img/quest_closed.png">');
}

if (localStorage.getItem("puzzlecode4") !== null) 
{
	$('.piece:nth-of-type(4)').addClass('piece-4').animate({'opacity':1}, 1000);
	$('.panel-heading:eq(3)').css('background', '#97E078');
    $('.panel-heading:eq(3) .done').html('<img src="img/quest_closed.png">');
} 

if (localStorage.getItem("puzzlecode5") !== null)
{
	$('.piece:nth-of-type(5)').addClass('piece-5').animate({'opacity':1}, 1000);
	$('.panel-heading:eq(4)').css('background', '#97E078');
    $('.panel-heading:eq(4) .done').html('<img src="img/quest_closed.png">');
}

if (localStorage.getItem("puzzlecode6") !== null)
{
	$('.piece:last').addClass('piece-6').animate({'opacity':1}, 1000);
	$('.panel-heading:last').css('background', '#97E078');
    $('.panel-heading:last .done').html('<img src="img/quest_closed.png">');
}



// Als 6 items gevonden zijn, voer dan dit uit
if (localStorage.length == 6) {
setTimeout(function(){
   $('#myModal-all').modal('show');},2000);   
}

//haalt sessie naam op vanuit session.php
var session = '';
$.ajax (
	{
	url: "session.php",
	cache: false,
	async: false,
	success: function(html) 
	{
		session_name = $.parseJSON(html);
		session = JSON.stringify(session_name);
		console.log(session);
	}
});
console.log(session);
// als een tweede is gescand zonder dat er ingelogd is moet hi niet de item setten....

if (session == '[]' && localStorage.length == 2) {
	alert('Je dient echt eerst in te loggen voordat je verder wilt zoeken');
	localStorage.clear();
}




// als eerste item is gevonden, toon dan de modal box die aanspoort om te registreren als dat nog niet is gebeurd...

	if (localStorage.length == 1 && session == '[]') {
	setTimeout(function(){
		console.log('hi');
		$('#myModal-first').modal('show');}, 2000);
	}






// vult de class counter aan met hoeveelheid codes gescant
	var length = localStorage.length;
	for (var i=0; i<length+1; i++) 
	{
		$('.counter').html(i + ' / 6');
	}


// tabs controller

$('#tabs a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});

$('#voortgang').click(function() {
    console.log('test');
    
    window.location.replace('puzzle.php');
})
//logout sessie 

$('.logout').click(function(){
	var exit = confirm('Weet je zeker dat je wilt uitloggen?');
	if (exit) {
		window.location = 'index.php?logout=true';
	}
});

//  check if is alphanumeric 
function isAlphanumeric(){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(document.getElementById('username').value.match(alphaExp)){
		return true;
	}else{
			console.log('testfalse');
		alert('Uw gebruikersnaam mag alleen uit letters en cijfers bestaan');
		document.getElementById('username').focus();
		return false;
	}
}
// same height/width for puzzle pieces

$(window).ready(updateHeight);
$(window).resize(updateHeight);

function updateHeight()
{
    var div = $('.piece');
    var width = div.width();
    div.css('height', width);
}

//chatfunctie

	$('#exit').click(function()
							{
								
								if (exit)
								{
									window.location = 'index.php?logout=true';
								}
							});
							
							console.log('test');
							
							$('#submitmsg').on('click', function()
							{
							
								var clientmsg = $('#usermsg').val();
								$.post('post.php', {text: clientmsg});
								$('#usermsg').val('');
								return false;
							});
							
							function loadlog()
							{
								$.ajax(
								{
									url: "log.html",
									cache: false,
									success: function(html)
									{
										$("#chatbox").html(html); //insert chat log into the #chatbox div
									}
								});
								
								$('#chatbox').animate(
								{
									scrollTop: $('#chatbox').get(0).scrollHeight
								}, 0);

							}
							
							setInterval(loadlog,1500);

