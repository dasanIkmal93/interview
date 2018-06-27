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
        div.form-div{
            background-color: white;
            opacity: 0.7;
            padding-top: 15px;
            padding-bottom: 15px;
            border-radius: 5px;
            margin-top: 56px;
            margin-bottom: 56px;
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
        <div class="col-md-4 button" style="margin-left: 209px;">
            <button type="button" class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/login/logout'">Log out</button>
            <button type="button" class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/Advertisement/'">Create Advertisement</button>
        </div>
    <?php }?>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 mx-auto form-div">
        <?php echo form_open_multipart('Advertisement/newAdd');?>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Advertisement Name" tabindex="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <select class="form-control" name="category">
                        <?php  foreach($category as $row):?>
                         <option value="<?php echo $row->c_name; ?>"><?php echo $row->c_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="comment">Description:</label>
                <textarea class="form-control" rows="5" id="description" name="description"></textarea>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">


                <div class="funkyradio">
                    <div class="funkyradio-default">
                        <input type="radio" name="radio" id="radio1" value="5" checked/>
                        <label for="radio1">05	minutes – LKR	50</label>
                    </div>
                    <div class="funkyradio-primary">
                        <input type="radio" name="radio" id="radio2" value="10"/>
                        <label for="radio2">10	minutes – LKR	100	</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="radio" name="radio" id="radio3" value="15"/>
                        <label for="radio3">15	minutes	– LKR	150	</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6"><input type="submit" value="New Advertisement" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                <div class="col-xs-12 col-md-6"><a onclick="location.href='<?php echo base_url();?>index.php/'" class="btn btn-success btn-block btn-lg">Back</a></div>
            </div>
        </form>
    </div>
</div>




</body>
</html>