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

    
    
	<section id="main-page">
		<div class="main-title">
			<h2>Select a state and city.</h2>
            <!--
                <ul id="cities">
                    <form>
                        <select id="state" name="state">

                        <option value='AL'>Alabama</option>
                        <option value='AK'>Alaska</option>
                        <option value='AZ'>Arizona</option>
                        <option value='AR'>Arkansas</option>
                        <option value='CA'>California</option>

                        <option value='CO'>Colorado</option>
                        <option value='CT'>Connecticut</option>
                        <option value='DE'>Delaware</option>
                        <option value='DC'>District of Columbia</option>
                        <option value='FL'>Florida</option>

                        <option value='GA'>Georgia</option>
                        <option value='HI'>Hawaii</option>
                        <option value='ID'>Idaho</option>
                        <option value='IL'>Illinois</option>
                        <option value='IN'>Indiana</option>

                        <option value='IA'>Iowa</option>
                        <option value='KS'>Kansas</option>
                        <option value='KY'>Kentucky</option>
                        <option value='LA'>Louisiana</option>
                        <option value='ME'>Maine</option>

                        <option value='MD'>Maryland</option>
                        <option value='MA'>Massachusetts</option>
                        <option value='MI'>Michigan</option>
                        <option value='MN'>Minnesota</option>
                        <option value='MS'>Mississippi</option>

                        <option value='MO'>Missouri</option>
                        <option value='MT'>Montana</option>
                        <option value='NE'>Nebraska</option>
                        <option value='NV'>Nevada</option>
                        <option value='NH'>New Hampshire</option>

                        <option value='NJ'>New Jersey</option>
                        <option value='NM'>New Mexico</option>
                        <option value='NY'>New York</option>
                        <option value='NC'>North Carolina</option>
                        <option value='ND'>North Dakota</option>

                        <option value='OH'>Ohio</option>
                        <option value='OK'>Oklahoma</option>
                        <option value='OR'>Oregon</option>
                        <option value='PA'>Pennsylvania</option>
                        <option value='RI'>Rhode Island</option>

                        <option value='SC'>South Carolina</option>
                        <option value='SD'>South Dakota</option>
                        <option value='TN'>Tennessee</option>
                        <option value='TX'>Texas</option>
                        <option value='UT'>Utah</option>

                        <option value='VT'>Vermont</option>
                        <option value='VA'>Virginia</option>
                        <option value='WA'>Washington</option>
                        <option value='WV'>West Virginia</option>
                        <option value='WI'>Wisconsin</option>

                        <option value='WY'>Wyoming</option>
                        </select> 
                        <input type="submit" value="Submit">
                    </form>
                </ul> -->
            
        </div>
    </section>
    
    <section id="data">
    
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
	
    <!--san diego-->
     <script>
    $(document).ready(function(){
    $.getJSON("https://api.meetup.com/2/groups?callback=?&country=us&offset=0&city=san+diego&format=json&photo-host=public&state=ca&page=100&fields=&order=members&desc=false&api&key=70404f7db6f466a5a2c5d1321176e7f", 
function (data) {
    var htmlString = "";
    var setArray = [];
    $.each(data.results, function (i, item) {
        htmlString += '<h3><a href="' + item.link + '" target="_blank">' + 'Category: ' + item.category.name + '<br>' + 'Count: ' + item.members + ' ' + '</a></h3>';
        });
        setArray.push(htmlString);
        //$('#data').html(htmlString);
        //console.log(htmlString);
        for (var i = 0; len = htmlString.length; i < len; i++) {
               
        }
        });            
    });
    </script>

    

    <!-- example with california 
    <script>
    $(document).ready(function(){
    $.getJSON("https://api.meetup.com/2/groups?callback=?&sign=true&member_id=8377069&page=20&api&key=70404f7db6f466a5a2c5d1321176e7f&only=name,link", 
function (data) {
    var htmlString = "";
    $.each(data.results, function (i, item) {
        htmlString += '<h3><a href="' + item.link + '" target="_blank">' + item.name + '</a></h3>';
    });
    $('#data2').html(htmlString);});
    });
    </script>
-->
    
    
    
 </body>
</html>
