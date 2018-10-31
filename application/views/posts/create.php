<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <meta charset="gb2312">
    <meta name="keywords" content="Makeup life, share cosmetics,shopping comestics, social network,post blog and vlog,payment">
    <meta name="description" content="Makeup toturial, recommand cosmetics,shopping comestics">
    <title>Makeup Life</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/images/KingF.ico" type="image/x-icon">
    <link rel="shor›tcut icon" href="<?php echo base_url() ?>assets/images/KingF.ico" type="image/x-icon">
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css "/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/global.css"/>


    <style>
        .post-container{
            width:800px;
            margin: 0 auto;
            margin-top: 0;
            margin-left: auto;
            margin-bottom: 0;
            margin-bottom: auto;
            overflow-x: auto;
        }

        .blank5 {
            clear: both;
            font-size: 0px;
            overflow: hidden;
            height: 5px;
        }

    </style>

</head>

<body style="overflow-x: hidden">

<div class="post-container">
    <h2><?=$title;?></h2>


    <?php echo form_open_multipart('posts/create'); ?>

    <div class="form-group">
        <label>Choose an existing category</label>
        <div class="blank5"></div>
        <select name="category_id" class="form-control" style="height: auto;border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
            <option disabled selected value>please select a category</option>
            <?php foreach ($categories as $category): ?>
                <?php if ($this->session->userdata('user_id') == $category['user_id']): ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php endif;?>
            <?php endforeach;?>
        </select>
    </div>

    <div class="form-group">
        <label>Add new category</label>
        <div class="blank5"></div>
        <input type="text" class="form-control" name="name" placeholder="Enter category name" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
        <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
    </div>

    <div class="form-group">
        <label>Title</label>
        <div class="blank5"></div>
        <input type="text" class="form-control" name="title" placeholder="Add Title" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">
        <?php echo form_error('title', '<div class="text-danger">', '</div>'); ?>
    </div>

    <div class="form-group">
        <label>Body</label>
        <div class="blank5"></div>
        <textarea id="editor1" class="form-control" name="body" placeholder="Add Body" style="height: 200px;border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;"></textarea>
        <?php echo form_error('body', '<div class="text-danger">', '</div>'); ?>
    </div>

    <div class="form-group">
        <label>Upload Image</label>
        <div class="blank10"></div>
        <input type="file" name="userfile" size="20" style="border-radius: 5px;">
        <?php echo form_error('userfile', '<div class="text-danger">', '</div>'); ?>
    </div>
    <!-- <?php echo $this->upload->do_upload() ?> -->
    <button type="submit" class="btn btn-default" style="border-radius: 5px;box-shadow: 0 0 5px #CCCCCC;">Submit</button>
    </form>
    <div class="blank50"></div>
</div>

</body>
</html>
