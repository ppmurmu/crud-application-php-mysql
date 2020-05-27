<!DOCTYPE html>
<html>
<head>
    <title>Blog Database All Blogs </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
        <a href="#" class="navbar-brand">Blog database</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px;">
        <div class="row">
            <div class="col-md-12">
                <?php
                $success=$this->session->userdata('success');
                if($success !="") {
                ?>
                <div class="alert alert-success"><?php echo $success;?></div>
                <?php
                }
                ?>
                <?php
                $failure=$this->session->userdata('failure');
                if($failure !="") {
                ?>
                <div class="alert alert-success"><?php echo $failure;?></div>
                <?php
                }
                ?>
            </div>
        

            <div class="col-md-12">
                <div class="row">
                    <div class="col-6"><h3>All blogs</h3></div>
                        <div class="col-md-6 text-right">
                            <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>    
    
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Published (date/time)</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <?php if(!empty($name)) { foreach($name as $user) {?>
                    <tr>
                        <td><?php echo $user['Name']?></td>
                        <td><?php echo $user['Description']?></td>
                        <td><?php echo $user['Category']?></td>
                        <td><?php echo $user['Author']?></td>
                        <td><?php echo $user['Published (date/time)']?></td>
                        <td><?php echo $user['Status']?></td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/edit/'.$user['Name']?>" class="btn btn-primary">
                            Edit</a>

                        </td>
                        <td>
                            <a href="<?php echo base_url().'index.php/user/delete/'.$user['Name']?>" class="btn btn-danger">
                            Delete</a>

                        </td>
                    </tr>
                    <?php } } else { ?>
                    <tr>
                        <td colspan="S"> Records not found </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    
</div>
</body>
</html>
