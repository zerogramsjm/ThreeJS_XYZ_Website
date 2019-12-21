<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>X Y Z</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script src="/build/three.min.js"></script>
<script src="/js/loaders/OBJLoader.js"></script>
 <script type="text/javascript" src="js/Stats.js"></script>
</head>
	
<body class="studentpage">
	
	<div id="container">
   <nav id="nav">

<p class="alignleft">
 	<a href="http://xyz.interactivedesignlincoln.co.uk/"><img src="images/XYZlogo.png" width="70px" height="auto">
      </p></a>
   	   
<p class="alignright">
        <ul>
 <li><a href="http://xyz.interactivedesignlincoln.co.uk/student.php">GRADUATES</a></li>
 <li><span style="font-weight:bold" id="studentname"></span></li>


        	</ul>

         </p>

    </nav>

	</div>
			


<div id="mobilecontent">

<div class="floating-box">
<a href="/who/adam"><img src="images/thumbs/adam.png"/></a>
</div>

<div class="floating-box">
<a href="/who/denham"><img src="images/thumbs/denham.png"/></a>
</div>

<div class="floating-box">
<a href="/who/drew"><img src="images/thumbs/drew.png"/></a>
</div>

<div class="floating-box">
<a href="/who/effie"><img src="images/thumbs/effie.png"/></a>
</div>

<div class="floating-box">
<a href="/who/jamie"><img src="images/thumbs/jamie.png"/></a>
</div>

<div class="floating-box">
<a href="/who/jevon"><img src="images/thumbs/jevon.png"/></a>
</div>

<div class="floating-box">
<a href="/who/josh"><img src="images/thumbs/josh.png"/></a>
</div>

<div class="floating-box">
<a href="/who/matt"><img src="images/thumbs/matt.png"/></a>
</div>

<div class="floating-box">
<a href="/who/paul"><img src="images/thumbs/paul.png"/></a>
</div>	
	
<div class="floating-box">
<a href="/who/sam"><img src="images/thumbs/sam.png"/></a>
</div>

<div class="floating-box">
<a href="/who/taryn"><img src="images/thumbs/taryn.png"/></a>
</div>

</div>


<script>

			var container;

			var camera, scene, renderer,stats,wireframe,hemiLight,dirLight;

			var mouseX = 0, mouseY = 0;

			var windowHalfX = window.innerWidth / 2;
			var windowHalfY = window.innerHeight / 2;
			var objarray = ['drew','adam','denham','effie','matt','paul','jevon','josh','sam','taryn','jamie','suzan'];
			var mat0 = new THREE.MeshPhongMaterial( { color: 0x880303, specular: 0x000000, shininess: 10, morphTargets: true, vertexColors: THREE.FaceColors, shading: THREE.FlatShading } );
			var headobjects=[];
			var mat1 = new THREE.MeshPhongMaterial( { color: 0x000000, specular: 0x333333, shininess: 10, morphTargets: true, vertexColors: THREE.FaceColors, shading: THREE.FlatShading } );
			var raycaster = new THREE.Raycaster();
			var mouse = new THREE.Vector2();
			var mouse3D;
			var INTERSECTED ;
			var count;
			var group = new THREE.Object3D();


			init();
			animate();
			
			window.addEventListener( 'resize', onWindowResize, false );

			function init() {

				container = document.createElement( 'div' );
				document.body.appendChild( container );

				camera = new THREE.PerspectiveCamera( 30, window.innerWidth / window.innerHeight, 1, 5000 );
				camera.position.set( 0, 0, 200 );

				// scene

				scene = new THREE.Scene();


				hemiLight = new THREE.HemisphereLight( 0xffffff, 0xffffff, 0.4 );
				hemiLight.color.setHSL( 0.6, 1, 0.6 );
				hemiLight.groundColor.setHSL( 0.095, 1, 0.75 );
				hemiLight.position.set( 0, 500, 0 );
				//scene.add( hemiLight );

				//

				dirLight = new THREE.DirectionalLight( 0xffffff, 1 );
				dirLight.color.setHSL( 0.1, 1, 0.95 );
				dirLight.position.set( -1, 1.75, 1 );
				dirLight.position.multiplyScalar( 50 );
				scene.add( dirLight );

				dirLight.castShadow = true;

				dirLight.shadowMapWidth = 2048;
				dirLight.shadowMapHeight = 2048;

				var d = 50;

				dirLight.shadowCameraLeft = -d;
				dirLight.shadowCameraRight = d;
				dirLight.shadowCameraTop = d;
				dirLight.shadowCameraBottom = -d;

				dirLight.shadowCameraFar = 3500;
				dirLight.shadowBias = -0.0001;

				// texture

				var manager = new THREE.LoadingManager();
				
				manager.onProgress = function ( item, loaded, total ) {

					console.log( item, loaded, total );
					if(loaded ===12){
						positionobj();
					}

				};

				var texture = new THREE.Texture();
				var loader = new THREE.OBJLoader( manager );
				var onProgress = function ( xhr ) {
					if ( xhr.lengthComputable ) {
						var percentComplete = xhr.loaded / xhr.total * 100;
						console.log( Math.round(percentComplete, 2) + '% downloaded' );
					}
				};

				var onError = function ( xhr ) {
				};

				//load models
				for (i = 0; i < objarray.length; i++) {					
					loader.load( 'obj/'+objarray[i]+'.obj', function ( object ) {											
					headobjects.push(object);	
					}, onProgress, onError );
				}
					
		

				// axes
				//axes = new THREE.AxisHelper( 200 );
				//scene.add( axes )
				//
				renderer = new THREE.WebGLRenderer({antialias: true,alpha: true});
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setClearColor(0xE1E1E1, 1);
				renderer.setSize( window.innerWidth, window.innerHeight );
				document.body.appendChild( renderer.domElement );
				container = document.createElement('div');
				document.body.appendChild(container);
				//stats = new Stats();
				//stats.domElement.style.position = 'absolute';
				//stats.domElement.style.top = '0px';
				//stats.domElement.style.zIndex = 100;
				//container.appendChild( stats.domElement );

			}
			function positionobj(){
				console.log('position');
				count = 1;
				var inc = 25;
				var newy = -30;
				var newx = -30;
				//items have been loaded so position them.
				for (i = 0; i < headobjects.length; i++) {
					console.log(count,newx+inc,newy);
						headobjects[i].position.y = newy;
						headobjects[i].position.x = newx;
						headobjects[i].material= mat0;
						headobjects[i].callback = function() { console.log( this.name ); }
						headobjects[i].castShadow = true;
						headobjects[i].receiveShadow = true;
						group.add( headobjects[i] );
						scene.add(group);
							
							count++;
							newx+=inc;
							if(count == 5){
							count=1;
							newy+=inc;
							newx=-30;					
							}							
						}
						
				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				document.addEventListener("mousedown", onDocumentMouseDown, false);
			}

			function onWindowResize() {

				windowHalfX = window.innerWidth / 2;
				windowHalfY = window.innerHeight / 2;

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

			}

			function onDocumentMouseMove( event ) {

				mouseX = ( event.clientX - windowHalfX ) / 2;
				mouseY = ( event.clientY - windowHalfY ) / 2;
				for (i = 0; i < headobjects.length; i++) {
					//console.log(objects[i]);
				}
				
				mouse3D = new THREE.Vector3(
        ( event.clientX / window.innerWidth ) * 2 - 1,
        - ( event.clientY / window.innerHeight ) * 2 + 1,
        0.5 );
		//console.log(mouse3D);
		mouse.x = ( event.clientX / renderer.domElement.clientWidth ) * 2 - 1;
		mouse.y = - ( event.clientY / renderer.domElement.clientHeight ) * 2 + 1;

			}

			//

			function animate() {

				requestAnimationFrame( animate );
				render();

			}

			function render() {
				
				camera.position.x += ( mouseX - camera.position.x ) * .05;
				camera.position.y += ( - mouseY - camera.position.y ) * .05;
				
				for (i = 0; i < headobjects.length; i++){

					headobjects[ i ].lookAt( camera.position );

				}

				camera.lookAt( scene.position );

				renderer.render( scene, camera );
				
				raycaster.setFromCamera( mouse, camera );

				var intersects = raycaster.intersectObjects( headobjects,true );
				if ( intersects.length > 0 ) {
					
				var s =intersects[ 0 ].object.name;
				var n = s.indexOf('.');
				s = s.substring(0, n != -1 ? n : s.length).toLowerCase();
					console.log(s);
				// if the closest object intersected is not the currently stored intersection object
		if ( intersects[ 0 ].object != INTERSECTED ) 
		{
		    // restore previous intersection object (if it exists) to its original color
			if ( INTERSECTED ) 
				INTERSECTED.material.color.setHex( INTERSECTED.currentHex );
			// store reference to closest object as current intersection object
			INTERSECTED = intersects[ 0 ].object;
			// store color of closest object (for later restoration)
			INTERSECTED.currentHex = INTERSECTED.material.color.getHex();
			// set a new color for closest object
			INTERSECTED.material.color.setHex( 0xe1e1e1  );
			$('#studentname').text(s);
		}
	} 
	else // there are no intersections
	{
		// restore previous intersection object (if it exists) to its original color
		if ( INTERSECTED ) 
			INTERSECTED.material.color.setHex( INTERSECTED.currentHex );
		// remove previous intersection object reference
		//     by setting current intersection object to "nothing"
		INTERSECTED = null;
		$('#studentname').text('');
	}
				

			}
			function clicked(){
				
			}
			function onDocumentMouseDown( event ) {

    event.preventDefault();
	console.log('down');

				mouse.x = ( event.clientX / renderer.domElement.clientWidth ) * 2 - 1;
				mouse.y = - ( event.clientY / renderer.domElement.clientHeight ) * 2 + 1;

				raycaster.setFromCamera( mouse, camera );

				var intersects = raycaster.intersectObjects( headobjects,true );

				if ( intersects.length > 0 ) {
					
				var s =intersects[ 0 ].object.name;
				var n = s.indexOf('.');
				s = s.substring(0, n != -1 ? n : s.length).toLowerCase();
					console.log(s);
					intersects[ 0 ].object.material.color.setHex( 0x666666  );
					location.assign('/'+s+'.php');

				}
	
	function clickedstudent(name){

	}

}

		</script>

</body>
</html>