<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(null);
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<style>
	body {
		overflow-x:hidden;
		background-image: url(<?php echo base_url();?>assets/images/background1.jpg) ; 
		background-repeat: no-repeat; 
		background-size:1500px 900px;
		ox-shadow: inset 0 0 0 1000px rgba(0,0,0,.2);
		
	}
	
	div.nametag{
		/* background-color:white;
		opacity: 0.6; */
		margin-top:40px;
	}
    div.nameline{
		color:white;
		font-family: cursive;
		margin-left:20px;
	}
    div.form-div{
        background-color: white;
        opacity: 0.7;
        padding-top: 15px;
        padding-bottom: 15px;
        border-radius: 5px;
        margin-top: 56px;
        margin-bottom: 56px;
    }
    div.error{
        color: red;
    }
	
</style>
</head>
<body>
	<div class="row nametag">
		<div class="col-md-6 nameline">
			<h1>Classified	Advertising</h1>
		</div>	
	</div>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 mx-auto form-div">
            <div class="error">
                <?php echo $error;?>
            </div>
            <?php echo form_open_multipart('uploads/do_upload');?>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                </div>
                <div class="form-group">
                    <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address ">
                </div>
                <div class="form-group">
                    <input type="text" name="contactNumber" id="contactNumber" class="form-control input-lg" placeholder="Phone Number ">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="file" name="image" id="image" class="form-control input-lg" placeholder="Photo" tabindex="5">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                    <div class="col-xs-12 col-md-6"><a onclick="location.href='<?php echo base_url();?>index.php/Login'" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                </div>
            </form>
        </div>
    </div>


</body>
</html>