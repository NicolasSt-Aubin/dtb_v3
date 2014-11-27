<?php include_once('header.php') ?>

<!-------------------- Side menu -------------------->

<nav id="side-menu" class="container">
	
	<img id="close-menu" class="easy-fade" src="img/close-menu.png"/></br></br></br>
	
	<a class="easy-fade" href="#result-container">Questionnaire</a></br>
	<a class="easy-fade" href="#client-container">Profils clients</a></br>
	<a class="easy-fade" href="#how-container">Fonctionnement</a></br>
	<a class="easy-fade" href="#footer-container">Contact</a></br>
	
	<h2>Greybox Solutions Inc.</h2>
	<p>225 Chabanel W. </br> Montreal, Qc, Canada </br> H2N 2C9</p>
	<p>(438) 738-6742</p>
	<p>info@greybox.biz</p>
	
	<div class="side-menu-social">
		<a href="https://www.facebook.com/GreyboxWellness" target="_blank" class="easy-fade"><img src="img/FB.png"/></a>
		<a href="https://plus.google.com/b/109057083841537902073/109057083841537902073/about/p/pub" target="_blank" class="easy-fade"><img src="img/RSS.png"/></a>
		<a href="https://twitter.com/GreyboxSolution" target="_blank" class="easy-fade"><img src="img/Twitter.png"/></a>
		<a href="https://www.linkedin.com/company/3260079?trk=tyah&trkInfo=idx%3A1-1-1%2CtarId%3A1416842820101%2Ctas%3Agreybox" target="_blank" class="easy-fade"><img src="img/linkedin.png"/></a>
	</div>
	
	<p class="reserved-rights">Tous droits réservés,</br>Greybox Solutions Inc. 2014</p>
	
</nav>	

<!-------------------- Initial quiz container -------------------->

<div id="initial-quiz-container" class="container">

	<h1>Êtes-vous en santé ?</h1>
	<h4>Répondez aux 6 questions suivantes pour le découvrir!</h4>
	
	<p><span id="question-index">1</span> de 6</p>
	<h1 id="initial-question">J'ai un niveau d'activité physique suffisant.</h1>
	
	<div class="row">
		<span id="true-button" class="initial-answer-button easy-fade">Vrai</span>
		<span id="false-button" class="initial-answer-button easy-fade">Faux</span>
	</div>
	
	<div class="row easy-fade" id="direct-site-button">
		<a>Passer directement au site</a>
		<img src="img/right_arrow.png"/>
	</div>
	
</div>

<!-------------------- Main Page -------------------->

<div id="main-page">
	
	<!-------------------- Result container -------------------->
	
	<div id="result-container" class="container">
		
		<h1 id="your-result-title">Votre résultat</h1>
		
		<div class="indicator-container">
			<img id="indicator" class="img-responsive" src="img/cadran.png"/></br>
			<img id="needle"  class="img-responsive" src="img/aiguille.png"/>
		</div>
		
		<h1 id="result-comment">Vous êtes proche du but!</h1>
		
		<div id="return-to-quiz-container">
			<img src="img/left_arrow.png" />
			<span>À tout moment, vous pouvez retourner <a id="take-quiz-button" class="easy-fade">répondre au questionnaire</a></span>
		</div>
		
		<h4 id="result-message">Des moyens peuvent être mis en place pour vous aider à demeurer en bonne santé.</h4>
		<h4>Soumettez votre courriel dans la boîte ci-dessous pour obtenir un suivi personnalisé directement des experts en santé Greybox.</h4>
		
		<div id="inscription-input-group" class="input-group">
	    	<input placeholder="moi@moncourriel.com" id="inscription-input" type="text" class="form-control">
			<span class="input-group-btn">
	        	<button id="inscription-button" class="btn easy-fade" type="button">Inscription</button>
			</span>
	    </div>
	  
		<img src="img/down_arrow_hex.png"/>
		
	</div>
	
	<!-------------------- Client container -------------------->
	
	<div id="client-container" class="container">
		
		<h1>À qui s’adressent les solutions Greybox ?</h1>
		
		<div class="col-md-10 col-md-offset-1">
			<div class="container">
				<div class="row">
					<div class="col-md-4 light-blue-bg client-info" >
						<img src="img/pill_hex.png"/>
						<h4>Malades chroniques</h4>
						<p>Éliminez les facteurs de risque qui causent 90 % des maladies chroniques.</p> 
						<p>Suivez en temps réel votre état de santé et celui de vos proches, et diminuez vos visites à l’urgence.</p>
					</div>
					<div class="col-md-4 light-green-bg client-info">
						<img src="img/trophy_hex.png"/>
						<h4>Sportifs</h4> 
						<p>Augmentez vos performances !</p>
						<p>Préparez-vous à atteindre vos objectifs et à exceller dans votre discipline.</p> 
					</div>
					<div class="col-md-4 light-grey-bg client-info">
						<img src="img/luggage_hex.png"/>
						<h4>Entreprises/Assureurs</h4>
						<p>Des employés en santé = une entreprise en santé.</p> 
						<p>Prenez soin de vos employés en leur offrant un programme de santé novateur et sur mesure, axé sur la prévention et la motivation.</p>
					</div>
					<div class="col-md-6 light-pink-bg client-info" >
						<img src="img/stetoscope_hex.png"/>
						<h4>Professionnels de la santé</h4> 
						<p>Optimisez votre temps et soyez proactifs.</p>
						<p>Réduisez les tâches administratives récurrentes tout en demeurant connectés avec vos patients.</p>
					</div>
					<div class="col-md-6 light-yellow-bg client-info" >
						<img src="img/apple_hex.png"/>
						<h4>À tout ceux qui veulent vivre mieux, et plus longtemps</h4> 
						<p>Offrez-vous la santé, exploitez votre potentiel quel que soit votre âge.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-------------------- How container -------------------->
	
	<div id="how-container" class="container">
		<h1>Comment fonctionne Greybox ?</h1>
		<h4>Découvrez nos produits et services à l’aide du schéma ci-dessous:</h4>
		<img src="img/how.png" class="img-responsive"/>
	</div>
</div>	

<?php include_once('footer.php') ?>