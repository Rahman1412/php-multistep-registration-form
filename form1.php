<?php include("includes/header.php"); ?>
<div class="container">
    <h3 class="bg-success text-center py-2">Multi Step Registration Form</h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="phone_no" class="form-label">Phone No</label>
            <input type="text" class="form-control" name="phone_no" value="<?php if(isset($_SESSION['info']['phone_no'])){
                echo $_SESSION['info']['phone_no'];
            }?>">
        </div>
        <div class="form-group">
            <label for="father_name" class="form-label">Father's Name</label>
            <input type="text" class="form-control" name="father_name" value="<?php if(isset($_SESSION['info']['father_name'])){
                echo $_SESSION['info']['father_name'];
            }?>">
        </div>
        <div class="form-group">
            <label for="mother_name" class="form-label">Mother's Name</label>
            <input type="text" class="form-control" name="mother_name" id="mother_name" value="<?php if(isset($_SESSION['info']['mother_name'])){
                echo $_SESSION['info']['mother_name'];
            }?>">
        </div>
        <div class="form-group">
            <label for="education" class="form-label">Highest Qualification</label>
            <input type="text" class="form-control" name="education" id="education" value="<?php if(isset($_SESSION['info']['education'])){
                echo $_SESSION['info']['education'];
            }?>">
        </div>
        <button type="submit" class="btn btn-success mt-3" name="next_one">Next</button>
    </form>
</div>
<?php include("includes/footer.php"); ?>