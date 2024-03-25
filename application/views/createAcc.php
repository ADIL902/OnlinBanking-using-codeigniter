<?php
$this->load->view('nav');
?>
<div class="row" style="">


        
        <center><h1>Create Account Here!</h1>
        <hr>
        <h2><?php echo $msg;?></h2>
        <hr>
</center>


    <div class="col-md-3"></div>

       <div class="col-md-6" style="border:2px solid gray;padding 10px">
       
            <form>
        <div class="row">
        <div class="col">
                Enter Pin
                <input type="text" name="p" class="form-control">
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col">
                Enter Name
                <input type="text" name="n" class="form-control">
        </div>
        <div class="col">
                Enter Father Name
                <input type="text" name="fn" class="form-control">
        </div>

        </div>
        <br>

        <br>
        <div class="row">
        <div class="col">
                Enter Email
                <input type="text" name="e" class="form-control">
        </div>
        <div class="col">
                Enter Phone
                <input type="text" name="ph" class="form-control">
        </div>

        </div>
        <br>
        <div class="row">
        <div class="col">
                Enter Gender
                <input type="text" name="g" class="form-control">
        </div>

        </div>


        <br>
        <div class="row">
        <div class="col">
                Enter Country
                <input type="text" name="c" class="form-control">
        </div>
        <div class="col">
                Enter State
                <input type="text" name="st" class="form-control">
        </div>
        <div class="col">
                Enter City
                <input type="text" name="ct" class="form-control">
        </div>

  

        </div>

        <br>
        <div class="row">
        <div class="col">
                Enter Amount
                <input type="text" name="amt" class="form-control">
        </div>

        </div>


        <br>
        <div class="row">
        <div class="col">
                <input type="submit" name="submit" class="btn btn-success" value="Create">
        </div>

        </div>
 </div>
    
</form>
