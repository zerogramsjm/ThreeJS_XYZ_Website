<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1"/> 
<title>X Y Z</title>

<script type="text/javascript" src="/js/jquear_no.js"></script>
<script type="text/javascript" src="/js/jquear_no_2.js"></script>
<script type="text/javascript" src="/js/script.js"></script>

		<style>
		*{
			
			margin: 0;
			padding: 0;
		}

		 a, ul, li {
            -o-transition:.5s;
            -ms-transition:.5s;
            -moz-transition:.5s;
            -webkit-transition:.5s;
        }

		body {
			background-color: #E1E1E1;
			font-family: Helvetica;
			font-size: 12px;
			overflow: scroll;
		}

.box {
  width: 100%;
  margin: 0 auto;
  margin-top: 0px;
  background: #E1E1E1;
  border: 0px solid #E1E1E1;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
  z-index: 100000;
}

.button {
  font-size: 1em;
  padding: 5px;
  color: #fff;
  transition: all 0.1s ease-out;
  z-index: 1000;
  font-size: 15px;
  position: absolute;
  left: 50px;
  top: 150px;
  background: #000;
  width: 200px;
}

.button:hover {
  background: #3b3b3b;
  color: #E1E1E1;
  z-index: 1000;
  text-decoration: none;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.6);
  transition: opacity 800ms;
  visibility: hidden;
  opacity: 0;
  z-index: 1000;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
  z-index: 1000;
}

.popup {
  color: #fff;

  padding: 25px;
  background: rgba(0, 0, 0, 0.6);
  border-radius: 5px;
  width: 40%;

  transition: all 1s ease-in-out;
  z-index: 1000;
  max-width: 500px;

  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  transform: translate(50%, 50%);
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
  z-index: 1000;
}
.popup .close:hover {
  color: #fff;
  z-index: 1000;
}
.popup .content {
  margin-top: 20px;
  max-height: 30%;
  overflow: auto;
  z-index: 1000;
}

.floating-box {
  display: inline-block;
  width: 300px;
  padding-left: 11px;
  border: none;  
}

#bg {
		  top: 0%; 
		  left: 0%; 
		  width: 100%; 
		  background-image: url("images/background.gif");
		  background-position: center;
		  height: 100%;
		  margin-bottom: 300px;
		  z-index: -9999;
		  background-repeat: no-repeat;
		}
		
		

	
		div.logo {
			margin-top: 3px;
			margin-left: 3px; 
			position: relative;

			background-color: #fff;
			z-index: 10000;
		}
		
		
		div#navigation_wrapper {
			width: 100%;
			position: fixed;
			text-align: center;
			z-index: 100;
		}

		
		div#content {	
			z-index: -100;

			margin-bottom: 300px;
			text-align: center;
		}
		
		div.post {
			align-content: center;
			margin:0 auto;
			max-width: 1300px;
		}
		
		div.post h1 {
			width: 100%;
			font-size: 15px;
			text-align: left;
			font-weight: lighter;

			margin-bottom: 20px;
			margin-top: 10px;
		}
	
		div.post h2 {
	 		float:left; 
    		width:75%;
			letter-spacing: 0px;
			font-size: 12px;
			text-align: left;
			font-weight: lighter;
			text-transform: none;
			margin-bottom: 25px;
			padding-left: 10%;
			padding-right: 10%;
		}

	
	div.content1 {
			width: 45%;
			height: 80px;
			display: inline-block; 
			background-color: #ffffff;
		}

		div.content2 {
			height: 80px;
			width: 45%;
			display: inline-block;
			background-color: #ffffff;
		}
		
		div#space {
			height: 60px;
			width: 100%;
			
		}
		
		
div#footer {
			margin: 0% ; 
			width: 100%;
			max-width: 100%;
			padding: 0px 0px;
			height: 100px;
			text-align: center;
			font-size:10px;
			color: #000;
			
			margin-bottom:0px;
			bottom: 0;
			position: fixed;
			overflow: scroll;

		}

			div#footer2 {
			margin: 0% ; 

			width: 100%;
			max-width: 100%;
			padding: 0px 0px;
			height: 40px;
			text-align: center;
			font-size:11px;
			color: #000;
			margin-top: 200px;
			margin-bottom:0px;
			bottom: 0;
			position: fixed;
	overflow: scroll;

		}


	a{
			color:#000;
			font-size:10px;
			text-decoration:none;
		color: #fff;
		}


		a:hover{
	text-decoration: underline;
		}

		img{
			opacity:1.0;
		}

		img.hover{
			opacity: 0.4;
		}
		

		#relatedContent {
		    max-width: 800px;
			margin: 200px auto;
		}

		#relatedContent .item {
			max-width: 44%;
			padding: 3%;
			float: left;
			text-align: center;
		}

		#relatedContent .item a img {
			max-width: 100%;
		}	

		.column {
float: right;
width: 200px;
text-align: left;
margin-left: 10%;
}

.clear {
min-width: 50%;
clear: both;
}


		nav { 
			position: fixed;
			text-transform: uppercase;
			letter-spacing: 1px;
			margin: 0px;
			background-color: #fff;
			padding-left: 0px;
			padding-right: 0px;
			width: 100%;
			text-align: left;
		}

		nav .alignleft {
			float: left;
			margin-left: 30px;
			margin-top: 30px;
			margin-bottom: 30px
}
			.alignright {
		float: right;

}

		nav ul{
			padding:0;
			margin:0;
			list-style: none;
			margin: 0 auto;
			width: 90%;
			text-align: right;
		}

		nav ul li {
			display:inline-block;
			text-align: right;
		}

		nav a {
			display:block;
			padding:0 14px;	
			color:#000;
			font-size:11px;
			line-height: 40px;
			text-decoration:none;
			text-align: right;
		}
		
		nav a:hover { 
			text-decoration:underline;
		}

		nav ul ul {
			display: none;
			position: absolute;
	 		text-align: center;
		}
	
		nav ul li:hover > ul {
			display:inherit;
 			text-align: center;
		}
	
		nav ul ul ul li {
			position: relative;
			top:-60px; 
			left:170px;
		}

div#footer2 {
		display:none;
			}
		

		@media all and (max-width: 880px) {

div#footer {
		display:none;
			}

			div#footer2 {
		display:block;
			}





					div#footer {
			margin: 0% ; 
			background-color: #fff;
			width: 100%;
			max-width: 100%;
			padding: 0px 0px;
			height: 115px;
			text-align: center;
			font-size:9px;
			color: #000;
			margin-top: 200px;
			margin-bottom:0px;
			bottom: 0;
			position: absolute;
			overflow: hidden;
		}

#top, #bottom, #left, #right {
	background: #fff;
	position: fixed;
	}
	#left, #right {
		top: 0; bottom: 0;
		width: 0px;
		}

		.column {
float: left;
width: 200px;
padding: 1px;
}
.clear {
width: 100%;
clear: both;
}

		div.post h1 {
			
			width: 100%;
			
			font-size: 12px;
			text-align: left;
			font-weight: lighter;
			text-transform: uppercase;
			margin-bottom: 25px;
		}

		div.post h2 {
			float:left; 
 		   width:75%;
			letter-spacing: 0px;
			font-size: 9px;
			text-align: left;
			font-weight: lighter;
			text-transform: uppercase;
			margin-bottom: 25px;
			padding-left: 10%;
			padding-right: 10%;
		}

		div.content1 {
			height: 60px;
			width: 100%;
			background-color: #ffffff;
			margin-bottom: 10px;
		}

		div.content2 {
			height: 60px;
			width: 100%;
			background-color: #ffffff;
		}

		nav ul {
			padding-left:  0%;
			padding-right:  0%;
			max-width: 100%;
		}

		nav a {
			max-width: 100%;
			line-height: 25px;
			padding-left:  0%;
			padding-right:  0%;
			font-size: 10px;
			padding-left:  7px;
			padding-right:  7px;
			padding-top:  5px;
			padding-bottom:  5px;
		}

		nav {
			position: fixed;
			max-width: 100%;
		    border-radius: 0;
		    border: 0;
   
  		}
		}

		li > a:after { content:  ' +'; }
		li > a:only-child:after { content: ''; }

		div#content img {
			width: 100%;
			height: relative;
			margin-top: 20px;
		}

		div#content img.smaller {
			width: 176px;
			height: 193px;
		}

		div#boxed {
		width: 100%;
		height: relative;
		margin-top: 20px;
		border: 1px solid green ;
  		border-width: 5px;
		border-color: #D3ACAC;
}
		
		</style>
		</head>
	
<body>

<div id="container">
   <nav id="nav">

<p class="alignleft">
 	<a href="http://xyz.interactivedesignlincoln.co.uk/"><img src="images/XYZlogo.png" width="70px" height="auto">
      </p></a>
   	   
<p class="alignright">
        <ul>
<br/><br/><br/>
 <li><a href="http://xyz.interactivedesignlincoln.co.uk/student.php">GRADUATES</a></li>

        	</ul>

         </p>

    </nav>

	</div>
		