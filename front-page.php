<?php get_header(); ?>

<!-- <div id="thing" style="grid-column: 2; grid-row: 3; z-index: 300;">

	<button id="hideButton" onclick="closer()" style="background-color: #a4d3e9; width: 100%; height: 40px; border: none; color: white; cursor: pointer; z-index: 300;">Enter</button>
	
</div> -->


		<div id="hero">

			<div style="
			width: 100%;
			margin-left: 0.5rem;
			">
				<h1 class="home">3D, AR, VR architectural prototypes</h1>
				<div style="display: flex;
				justify-content: flex-start;
				align-items: flex-start;
				margin-top: 0.5rem;">
					<div style="display: inline-block; padding-left: 0.5rem;">

						<h3>Controls</h3>
						<p style="padding-left: 0.5rem;"><strong>Orbit</strong>: Left mouse button <br>
							<strong>Zoom</strong>: Middle mouse button <br>
							<strong>Pan</strong>: Right mouse button</p>				
					</div>
					<div style="display: inline-block;">
						
						<h3>Visibility</h3>
						<form style="padding-left: 0.5rem;">
							<input class="floorInputs" type="radio" name="floor" value="all" checked="default"> All Floors<br>
							<input class="floorInputs" type="radio" name="floor" value="first"> Top Floor<br>
							<input class="floorInputs" type="radio" name="floor" value="second"> Main Floor<br>
							<input class="floorInputs" type="radio" name="floor" value="third"> Basement Floor
						</form>		
	
					</div>	

					<div id="mainFloorSpacesMenu">

						
						<h3>Main Floor</h3>
						<form style="padding-left: 0.5rem;">
							<input class="mainFloorInputs" type="radio" name="mainFloor" value="all" checked="default"> All Areas<br>
							<input class="mainFloorInputs" type="radio" name="mainFloor" value="first"> Back Entrance<br>
							<input class="mainFloorInputs" type="radio" name="mainFloor" value="second"> Kitchen<br>
							<input class="mainFloorInputs" type="radio" name="mainFloor" value="third"> Living Room<br>
							<!-- <input class="mainFloorInputs" type="radio" name="mainFloor" value="fourth"> Outer Wall<br> -->
							<input class="mainFloorInputs" type="radio" name="mainFloor" value="fifth"> Front Entrance<br>
							<!-- <input class="mainFloorInputs" type="radio" name="mainFloor" value="sixth"> Base Boards<br> -->

						</form>	
						
					</div>			
				</div>


			
			


				
			</div>

			

			
		</div>

		<main id="frontPageIntro">

			
		</main>





<?php get_footer(); ?>