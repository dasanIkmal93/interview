<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(NULL);
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
        .loginDiv {
            padding-top: 1%;
            margin-left: 37%;
            margin-right: 37%;
            margin-top: 4%;
            padding-bottom: 5%;
            background-color: white;
        }

        .loginlbl {
            margin-left: 38%;
        }

        .fields {
            margin-right: 9%;
            margin-left: 9%;
        }

        .loginbtndiv {
            float: left;
            padding-left: 75%;
            margin-top: -4%;
        }

        .signupdiv {
            float: left;
            margin-left: 8%;
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
    <div class="loginDiv" style="border-radius: 20px;opacity: 0.7;">
        <div>
            <h3 class="loginlbl">Login</h3>

        </div>
        <?php echo form_open_multipart('login/login');?>
        <div class="error">
            <?php echo $error;?>
        </div>
        <div class="fields">
            <div class="form-group">
                <label for="username">User Name:</label> <input type="text"
                                                                class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label> <input type="password"
                                                               class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="signupdiv"><label>No account?</label><button type="button" id="regbtn" onclick="location.href='<?php echo base_url();?>index.php/Register'" class="btn btn-link">Register Now!</button></div>
        <div class="loginbtndiv"><button type="submit" id="loginbtn" class="btn btn-primary">Login</button></div>
    </form>
    </div>



</body>
</html>