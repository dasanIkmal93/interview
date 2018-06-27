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
	div.button{
		margin-top:7px;
	}
	div.nameline{
		color:white;
		font-family: cursive;
		margin-left:20px;
	}
	button.btn-primary{
		background-color: #1e71eb;
    	border-color: white;
	}
</style>
</head>
<body>
	<div class="row nametag">
		<div class="col-md-6 nameline">
			<h1>Classified	Advertising</h1>
		</div>	

        <?php if($_SESSION['user_id']==""){?>
            <div class="col-md-2">

            </div>
		<div class="col-md-2 button">
			<button type="button" class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/register'">Register</button>
			OR
			<button type="button" class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/login'">Login</button>
		</div>
        <?php }?>
        <?php if($_SESSION['user_id']!= null) {?>
        <div class="col-md-4 button" style="margin-left: 208px;">
            <button type="button" class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/login/logout'">Log out</button>
            <button type="button" class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/Advertisement'">Create Advertisement</button>
        </div>
        <?php }?>
	</div>
    <div class="row" >
        <div class="col-md-11 mx-auto" style="">
            <div class="row">
                <div class="col-md-3" style="background-color: antiquewhite; opacity: 0.7;border-radius: 10px 0px 0px 10px;z-index:5;padding-top: 15px;">

                    <div class="panel-body">
                        <h5>Categories</h5>
                        <ul class="list-group" style="margin-bottom: 50px;">
                            <?php  foreach($category as $row):?>

                                <li class="list-group-item"><button onclick="loadItems(<?php echo $row->listId;?>);" style="border: none;background-color: transparent;color: black;"><?php echo $row->c_name; ?></button>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9" style="background-color: white;border-radius: 0px 10px 10px 0px;z-index:5;padding-top: 15px;">
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Advertisement</h5>
                        </div>
                    </div>
                    <div class="row">

                            <?php  foreach($adds as $row):?>
                            <div class="col-md-6" style="border-style: double;">
                                <div class="col-md-12">
                                    <?php
                                    $img =substr( $row->user_image , 3);

                                    if($_SESSION['user_id']!=null){?>
                                    <img src="<?php echo $row->user_image ?>" style="width: 191px;"/>
                                    <?php }else{ ?>
                                        <img src="<?php echo $img; ?>" style="width: 191px;"/>
                                   <?php }?>
                                </div>
                                <div class="col-md-12">
                                    <p><?php echo $row->a_name; ?></p>
                                </div>
                                <div class="col-md-12">
                                    <p><?php echo $row->a_discription; ?></p>
                                </div>
                                <div class="col-md-12">
                                    <p>Created by -<?php echo $row->user_fname . " ". $row->user_lname  ; ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>

                    </div>
                </div>

            </div>
        </div>
    </div>



</body>
</html>