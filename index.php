<?php include("includes/header.php"); ?>

<div class="container">
    <h3 class="bg-success text-center py-2">Multi Step Registration Form</h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php if(isset($_SESSION['info']['name'])){
                echo $_SESSION['info']['name'];
            } ?>">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php if(isset($_SESSION['info']['email'])){
                echo $_SESSION['info']['email'];
            }?>">
        </div>
        <div class="form-group">
            Gender:
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="male" value="1" <?php if(isset($_SESSION['info']['gender']) && $_SESSION['info']['gender']==1){
                    ?> checked <?php
                }?>>
                <label for="male" class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="female" value="0" <?php if(isset($_SESSION['info']['gender']) && $_SESSION['info']['gender']==0){
                    ?> checked <?php
                }?>>
                <label for="female" class="form-check-label">Female</label>
            </div>
        </div>
        <div class="form-group">
            <label for="dob" class="form-label">DOB</label>
            <input type="date" class="form-control" name="dob" id="dob" value="<?php if(isset($_SESSION['info']['dob'])){
                echo $_SESSION['info']['dob'];
            }?>">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" value="<?php if(isset($_SESSION['info']['address'])){
                echo $_SESSION['info']['address'];
            } ?>">
        </div>
        <button type="submit" class="btn btn-success mt-3" name="next">Next</button>
    </form>
</div>

<?php include("includes/footer.php"); ?>