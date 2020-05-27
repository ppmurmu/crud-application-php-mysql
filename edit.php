<!DOCTYPE html>
<html>
<head>
    <title>Blog Database</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
    <a href="index" class="navbar-brand">Blog database</a>
    </div>
</div>
<div class="container" style="padding-top: 10px;">
    <h3>Update Blog</h3>
    <hr>
    <form method="post" name="createblog" action="<?php echo base_url().'index.php/user/edit/'.$user['Name'];?>">
    <div class="row">
        
        <div class="col-md-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo set_value('name',$user['Name']);?>" class="form-control">
                <?php echo form_error('name');?>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" value="<?php echo set_value('description',$user['Description']);?>" class="form-control">
                <?php echo form_error('description');?>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category" class="browser-default custom-select">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Food">Food</option>
                    <option value="Travel">Travel</option>
                    <option value="Music">Music</option>
                    <option value="Sports">Sports</option>
                    <option value="Political">Political</option>
                    <option value="Informative">Informative</option>
                </select>
                <?php echo form_error('category');?>
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" value="<?php echo set_value('author',$user['Author']);?>" class="form-control">
                <?php echo form_error('author');?>
            </div>
            
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="browser-default custom-select">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="Draft">Draft</option>
                    <option value="Published">Published</option>
                    
                </select>
                <?php echo form_error('status');?>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
                <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
                
            </div>

        </div>
        
    </div>
    </form>
    </hr>
</div>
</body>
</html>
