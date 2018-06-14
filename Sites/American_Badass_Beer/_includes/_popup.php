	
		
		
		
<!--		transition: [transition-property] [transition-duration] [transition-timing-function] [transition-delay];-->
		
		
<style>

	#popup-verification-age 
	{
		width: 100%;
		position: fixed;
		top:0;
		right:0;
		bottom:0;
		left:0;
		margin: auto;
		z-index:99999999;
	}
	
	.popup-verification-age-eagle
	{
		width: 100%;
		position: absolute;
		top:0;
		right:0;
		bottom:0;
		left:0;
	}
	
	#popup-verification-age .verification-buttons .verification-buttons-column
	{
		width: 75%;
		margin: 0 auto;
	}

	#popup-verification-age .verification-buttons
	{
		position:absolute;
		bottom: 30%;
		width: 100%;
	}
	
	#popup-verification-age .verification-buttons .verification-buttons-column .btn-container-verify a.btn-over-21
	{
		float:left;	
	}
	
	#popup-verification-age .verification-buttons .verification-buttons-column .btn-contaier-verify a.btn-under-21
	{
		float:right;
	}
	
	#popup-verification-age .verification-buttons .verification-buttons-column .btn-container-verify a.btn-over-21,
	#popup-verification-age .verification-buttons .verification-buttons-column .btn-contaier-verify a.btn-under-21
	{
		padding: 0 0 0 0;
		margin: 0 0 0 0;
		cursor: pointer;
		font-size: 40px;
		font-family: "Brothreg";
		font-weight: bold;
		color: #333333;
		text-decoration: none;

		-webkit-transition: color ease-in-out 0,5s;
		-moz-transition: color ease-in-out 0,5s;
		-o-transition: color ease-in-out 0,5s;
		transition: color ease-in-out 0,5s;	

	}
	
	#popup-verification-age .verification-buttons .verification-buttons-column .btn-container-verify a.btn-over-21:hover,
	#popup-verification-age .verification-buttons .verification-buttons-column .btn-contaier-verify a.btn-under-21:hover
	{
		color#ffffff;
		text-decoration: none;
	}

	
	</div>

</div>

</style>


<div id="popup-verification-age" class="bab-bgc-red displayNO">
	
	<div class="popup-verification-age">
		<img src="img/eagle-age-verification.png" alt="eagle with wings spread silhouette" />
	</div>

	<div class="verification-buttons">
		<div class="verification-buttons-column">
			<div class="btn-container-verify"><a href="" class="btn-over-21">YES</a></div>
			<div class="btn-contaier-verify"><a href="" class="btn-under-21">NO</a></div>
		</div>
	</div>
</div>
		
	




















