<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Category App</title>		
        
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>		
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
      
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/normalize.css">		
		<link rel="stylesheet" href="custom.css">
		<link rel="stylesheet" href="css/animate.css">	
		<link rel="stylesheet" href="css/fonts.css">

</head>
<body> 
<div class="container-fluid">    
<section id="main-text">
	<h1>Area Mood Search</h1>
	<p>Based on the Meetup API, find the top interests in your city!</p><hr>
</section>

<section id="location">
	<form>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="citySearch">Input City</label>
					<input type="text" class="form-control" id="citySearch" placeholder="enter city..">
				</div>		
				<div class="form-group">
					<label for="citySearch">State</label><br>
					<select id="stateSearch">
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
					</select>
				</div>
				<button type="submit" class="btn btn-default" id="button-submit">Submit</button>
			</div>
		</div>
</section>

<section id="info">
	<div class="total">
	</div>

</section>		

	<script src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/validator.min.js"></script>	
	<script src="js/bootstrap.min.js"/>
	<script src="js/vendor/modernizr.js"></script>  
	<script src="js/vendor/fastclick.js"></script>
	<script type="text/javascript" src="js/jquery.blockUI.js"></script>
	<script src="js/scrollReveal.js"></script>
	<script src="js/custom.js"></script>
	
	<script>
		window.sr = new scrollReveal();
	</script>
			
	<script>
	$(document).ready(function(){   
	$('.intro-text h1').addClass('animated fadeInUp');
	$('.intro-text h3').addClass('animated fadeInUp');
	$('.intro-text p').addClass('animated fadeInUp');
	$('.intro-text hr').addClass('animated fadeIn');
	});
</script>

<script>
    $(document).ready(function() {
    //$.getJSON('keys.json');
        $.getJSON('keys.json', function(e) {
            key = e.key;
        });
    });
</script>	
	

<script>
$(document).ready(function(){

var city;
var state;

$( "#button-submit" ).click(function(e) {
	e.preventDefault();
	
	$("#info").empty();	// clear div
	var city = $("#citySearch").val().replace(/\s+/g, '+');
	var state = $("#stateSearch").val();
	var meetupAPI = 'https://api.meetup.com/2/groups?callback=?&city=' + city + '&state=' + state +  '&country=us&offset=0&format=json&photo-host=public&page=20&only=name%2Cmembers%2Ccategory.name&fields=&order=members&desc=false&api&key=' + key;

		$.getJSON(meetupAPI, function (json) {
		//console.log(json.details);
		if (json.results) {


			for(var i = 0; i < json.results.length; i++) {
			
				
				var category = json.results[i].category.name.replace('/','-'); // replace '/' with '-'
				var members = json.results[i].members;
				var name = json.results[i].name;
				var categoryID = $("#" + category);
				//var (category[i] + "Sum") = catSum;
				//var categoryID = $("<div>", {id: category});
				//console.log('category:' + category + ':' + members + ':' + id
			
				if(category.length) {		// check if category name exists then check if div category exists
					if ($(categoryID).length){ // if div category exists, append string to div
						$('<div class="row"><div class="col-sm-8"><p>' + name + '</div><div class="col-sm-4"><div class=' + category +  '-mem>' + members + '</div></p></div></div>').appendTo($(categoryID));
						
					} else {
						//$(categoryID).append('<div id="test">content</div>').appendTo("1socializing");
						$('<div id=' + category + '>').append('<h3>' + category + '</h3><div class="row"><div class="col-sm-8"><p>' + name + '</div><div class="col-sm-4"><div class=' + category +  '-mem>' + members + '</div></p></div></div>').appendTo('#info');
						// #category append <section id=category><p>name</section> and append this to #1socializing
					}
					//$(document.createElement('div')).attr('id', json.results[i].category.name)//rest of code
					//$(#json.results[i].category.name).append(name + '<br>Members: ' + members + '<br><br>');		
					//if(json.results[i].category.name == 'socializing') {
					//	socialSum += parseInt(json.results[i].members);
					//	$('#socializing').append(name + '<br>Members: ' + members + '<br><br>');			
					//} else if (json.results[i].category.name == "fitness") {
					//	fitnessSum += parseInt(json.results[i].members);
					//	$('#fitness').append(name + '<br>Members: ' + members + '<br><br>');
				} else {
					console.log("not");
				}
				
			}
		} else if (json.details.indexOf("Location is missing or invalid") >= 0 || json.details.indexOf("Perhaps you're missing a required parameter") >= 0) {		// if json returns missing, return empty;
				
			$("#info").empty().append("<h3>Could not find that location, please try again.</h3>"); // empty #info and write string
		}
		
		function cityFunction() {
			var input = document.getElementById("citySearch").value;
			alert(input);
		}
		
		function stateFunction() {
			var input = document.getElementById("citySearch").value;
			alert(input);
		}
		
		
		$(document).ready(function(){
	$(categoryID).each(function() {
		var catClass = ("." + category + "-mem");
		var total = 0;
		console.log(catClass);
		$(this).find(catClass).each(function() {
			total += parseInt($(this).text());
		});
		$(this).append($("<div></div>").text('Total: ' + total))
	});
});
		

		//$(categoryID).append('<hr>Total Members: ' + sum);
		//$('#socializing').append('<hr>Total Members: ' + socialSum);
		//$('#fitness').append('<hr>Total Members: ' + fitnessSum);
		//$('#data').append('<hr>Total Members: ' + memberSum);
	
		});
	});
});
</script>

    
    
 </body>
</html>
