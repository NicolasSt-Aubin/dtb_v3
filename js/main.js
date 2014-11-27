$(window).load(initPageHandler);

var score, currentQuestion;
var questions;


$(window).on("hashchange", function () {
	if(location.hash!="#footer-container")
    	window.scrollTo(window.scrollX, window.scrollY - 65);
    
    $("#side-menu").hide();
});

function initPageHandler(){
	$("#burger").click(function(){
		//$("#side-menu").animate({width:'toggle'},200);
		$("#side-menu").fadeIn();
	});
	
	$("#close-menu").click(function(){
		//$("#side-menu").animate({width:'toggle'},200);
		$("#side-menu").fadeOut();
	});
	
	// Inscription buttton
	$("#inscription-button").click(sendMail);
	$("#inscription-input").keyup(function(e){
		if(e.which == 13){
			sendMail();
		}
	});
	
	// Listener for true button
	$("#true-button").click(function(){
	
		// Increment question and score
		score++;
		currentQuestion++;
		
		// Quiz is over
		if(currentQuestion>=questions.length){
			initMainPage();
			return;
		}
		
		// Update question in interface
		$("#question-index").html(currentQuestion+1);
		$("#initial-question").html(questions[currentQuestion]);
		
	});
	
	// Listener for false button
	$("#false-button").click(function(){
		
		// Increment question
		currentQuestion++;
		
		// Quiz is over
		if(currentQuestion>=questions.length){
			initMainPage();
			return;
		}
		
		// Update question in interface
		$("#question-index").html(currentQuestion+1);
		$("#initial-question").html(questions[currentQuestion]);
	});
	
	// Listener for direct site button
	$("#direct-site-button").click(function(){
		score=-1;
		initMainPage();
	});
	
	// Return to quiz button 
	$("#return-to-quiz-container").click(function(){
		initQuiz();
	});
	
	initQuiz();
}

function initQuiz(){
	
	// page appearance
	$("#footer-container").hide();
	$("#main-page").hide();	
	$("#burger").hide();
	
	$("#initial-quiz-container").show();
	
	$("body").css("background-color","white");
	
	// Initialise quiz variables
	currentQuestion = 0;
	score = 0;
	
	questions = ["J’ai un niveau d’activité physique suffisant.","J’ai une alimentation équilibrée.","Je gère mon stress.","J’ai un poids santé.", "Je ne fume pas.", "J’ai un bon sommeil."];
	
	// Set initial question
	$("#question-index").html(currentQuestion+1);
	$("#initial-question").html(questions[currentQuestion]);
}

// When quiz is done update interface
function initMainPage(){
	setScore(score);
	
	$("#initial-quiz-container").fadeOut();
	
	$("#main-page").fadeIn();	
	$("#burger").fadeIn();
	$("#footer-container").fadeIn();
	
	$("body").css("background-color","#F1F1F1");
	
	window.scrollTo(0, window.scrollY - 65);
}

function setScore(s){
	score = s;
	
	$("#needle").addClass("score-"+s);
	
	$("#return-to-quiz-container").hide();
	$(".indicator-container").show();
	$("#your-result-title").show();
	
	var title,message;
	
	switch(s){
		case -1:
			$("#return-to-quiz-container").show();
			$(".indicator-container").hide();
			$("#your-result-title").hide();
			title = "Vous avez choisi de ne pas </br> répondre au questionnaire.";
			message = "";
			break;
		case 0:
		case 1:
		case 2:
			title = "Votre santé est à risque !";
			message = "Agissez et faites-vous aider par des professionnels de la santé.";
			break;
		case 3:
		case 4:
		default:
			title = "Vous êtes proche du but !";
			message = "Des moyens peuvent être mis en place pour vous aider à demeurer en bonne santé.";
			break;
		case 5:
		case 6:
			title = "Bravo !";
			message = "Consultez un professionnel de la santé pour diversifier vos activités.";
			break;
	}
	
	$("#result-comment").html(title);
	$("#result-message").html(message);
}

function sendMail(){
	
	if($("#inscription-input").val() == ""){
		return;
	}
	
	$.ajax({
	   url: "send_mail.php",
   	   type: "post",
	   data:{
		   score: score,
		   from: $("#inscription-input").val()
	   },
	   success:function(msg){
	   		alert(msg);
	   		$("#inscription-input").val("");
	   },
	   error:function(){
		   	alert("error");
	   }
	});
	
}