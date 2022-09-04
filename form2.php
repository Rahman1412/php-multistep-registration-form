<?php include("includes/header.php"); ?>
<div class="container">
    <h3 class="bg-success text-center py-2">Multi Step Registration Form</h3>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-success mt-3" name="submit">submit</button>
    </form>
</div>
<?php include("includes/footer.php"); ?>