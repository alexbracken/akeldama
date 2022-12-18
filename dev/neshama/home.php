<# 
This template uses includes for elements that might be used also in other templates
such as the header, navbar and footer markup. 
#>
<@ elements/header.php @>
	<@ elements/navbar.php @>
		<section class="hero is-large" >
		<div class="hero-body" style="background-image: url(@{ image }">
				<img class="logo" src="@{ imageLogo }"></img>
				<h2>@{ headline }</h2>
		</div>
		</section>	
		<section class="hero is-fullheight is-info">
			<div class="hero-body">
				<p>Test!</p>
			</div>
		</section>

<@ elements/footer.php @>