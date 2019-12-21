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
			font-family: tahoma, geneva, sans-serif;
			font-size: 10px;
			overflow: scroll;
		}

.floating-box {
    display: inline-block;
    width: 300px;
	padding-right: 11px;
	padding-left: 11px;
    border: none;  
}

.column {
float: right;
width: 300px;
padding: 10px;
text-align: left;
margin-left: 17%;
margin-bottom: 15%;
}

.clear {
min-width: 50%;
clear: both;
}

		#bg img {
		 position: fixed; 
		  top: 0%; 
		  left: 0; 
		  right: 0; 
		  bottom: 0; 
		  margin: auto; 
		  width:100%;
		  max-width:1400px;
		  max-height: auto;
		  min-height: auto;
		  z-index: -99999;

		}	
		
		div#navigation_wrapper {
			width: 100%;
			position: fixed;
			text-align: center;
			z-index: 1000;
		}

		
		div#content {	
			text-align: center;
		}


		div.post {
		font-size: 10px;
		overflow: scroll;
		position: fixed;
		width: 75%;
		height: 100%;
		margin-top: 100px;
		margin-bottom: 300px;
		margin-left: 5%;
}

		div.post2 {
		overflow: scroll;
		display:none;
		}



		div.post h1 {
			width: 100%;
			letter-spacing: 10px;
			font-size: 10px;
			text-align: center;
			font-weight: lighter;
			text-transform: uppercase;
			margin-bottom: 25px;
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
			z-index: -1000;
			
		}
		
		
		div#footer {
			margin: 0% ; 
		
			width: 100%;
			max-width: 100%;
			padding: 0px 0px;
			height: 170px;
			text-align: center;
			font-size:10px;
			color: #000;
			margin-top: 200px;
			margin-bottom:0px;
			bottom: 0;
			position: fixed;
			overflow: hidden;
			font-size: 0;
	

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
			color: #000000;
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
			z-index: 1000;
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
			width: 80%;
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
			line-height: 60px;
			text-decoration:none;
			text-align: right;
		 	
		}
		
		nav a:hover { 
			
			text-decoration:underline;
			
		
		}

		.active {
		text-decoration: line-through;
		
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


		div#contactform {
			letter-spacing: 10px;
			width: 50%;
			max-width: 1280px;	
			padding: 20px 0px 0px 0px;
			margin: 0 auto;
			background-color: #ffffff;
			text-transform: uppercase;
			min-height: 100px;
			margin-top: 200px;
			font-size:14px;
			text-align: center;
		}

		div#contactform input[type=text] {
			margin: 15px 0px 15px 0px;
			width: 80%;
			height: 20px;
			padding: 10px;
			border-width: 5px;
			border-color: #000;
		}

		div#contactform input[type=text_2] {
			margin: 15px 0px 15px 0px;
			width: 80%;
			height: 20px;
			padding: 10px;
			border-width: 5px;
			border-color: #000;
			display: inline-block;
		}

		div#contactform textarea {
			margin: 5px 0px 15px 0px;
			min-width: 80%;
			width: 80%;
			max-width: 80%;
			height: 100px;
			max-height: 100%;
			padding: 10px;
			border-width: 5px;
			border-color: #D3D3D3;
			display: inline-block;
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
width: 100px;
padding: 1px;
}
.clear {
width: 100%;
clear: both;
}
	


		div.post h1 {
			
			width: 100%;
			letter-spacing: 5px;
			font-size: 12px;
			text-align: center;
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

<div id="left"></div>
<div id="right"></div>



<div id="container">
   <nav id="nav">


<p class="alignleft">
 	<a href="http://xyz.interactivedesignlincoln.co.uk"><img src="images/XYZlogo.png" width="100px" height="auto">
      </p></a>
   	   
<p class="alignright">
        <ul>
<br/><br/><br/>
 <li><a href="http://xyz.interactivedesignlincoln.co.uk/student.php">STUDENTS</a></li>
            


        </ul>
         </p>
    </nav>

  
          


	

		</div>
			
		</div>
		
		<div id="space"></div>
		

