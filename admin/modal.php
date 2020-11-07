<style type="text/css">
	.modqwe {
  		display: none;/* Hidden by default */
   		position: fixed; /* Stay in place */
    	z-index: 5; /* Sit on top */
    	padding-top: 2%; /* Location of the box */
   		left: 0;
    	top: 0;
    	width: 100%; /* Full width */
    	height: 100%; /* Full height */
    	overflow: none; /* Enable scroll if needed */
    	background: rgb(0,0,0); /* Fallback color */
    	background: rgba(0,0,0,0.9); /* Black w/ opacity */
    	align-content: center;
    	align-items: center;
	}

	.modal-content-e{
		align-content: center;
 	    align-items: center;
 		 display: flex;
 		 justify-content: center;
		margin: 7px auto 0 auto;
		position: relative;
    	display: -ms-flexbox;
   	    -ms-flex-direction: column;
    	flex-direction: column;
    	width: 100%;
    	max-width: 450px;
    	pointer-events: auto;
    	height: 90%;
    	padding: 5%;

    	}
	.modal-content-e > .inner{
		height: 100%;
		padding: 10% 0px;
		max-width: 100%;
		min-width: 100%;
		background-color: #fff;
    	background-clip: padding-box;
    	border: 1px solid rgba(0,0,0,.2);
    	border-radius: .3rem;
    	outline: 0;
    	cursor: pointer;
    	align-content: center;
	}

	@media screen and (max-width : 575px) {
		.modal-content-e{
			height: 60%;
			margin-top: 20%;
			align-self: center;
		}
		.modal-content-e{
			max-width: 350px;
		}
	}

	input{
		margin: 10px 0px; 
		border-radius: .3rem;
		box-shadow: none;
		padding: 5px 10px;

	}
	.child-m{
		display: none;
	}
	.New{
		
	}
	.Existing{

	}
</style>
<div class="modqwe">
	<a class="close" style="margin-right: 10px;" href="javascript: void(0);"><span>&times;</span></a>
	<div class="modal-content-e">
		<div class="inner bg-white">
			<form class="main_ad_form">
				<div class="main">
					<div class="New child-m">
						<div class="small text-black-50"> <b> New Exam Form </b> </div>
						<input type="" name="New_exam" placeholder="New Exam Name">
						
						<div class="small text-black-50">Starting Time :</div>
						<input role="select" class="datetimesug" id="datetimes" type="datetime-local" name="daystart" min='2018-12-12' required>
						
						<div class="small text-black-50">Ending Time :</div>
						<input role="select" class="datetimesug" id="datetimes" type="datetime-local" name="dayend" min='2018-12-12' required>
					</div>
					<div class="Existing child-m">
						<h5 class="ex-name"></h5>
						<input class="child-m Search" type="" name="Search" placeholder="Search">
						<input class="child-m USearch" type="" name="PSearch" placeholder="Search Users">

					</div>
				</div>
				
				<div class="form-foot">
					<input type="button" class="admin_submit" name="Submit" value="Submit">
				</div>
			</form>
		</div>
	</div>
	
</div>