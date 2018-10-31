<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <meta charset="gb2312">
    <meta name="keywords" content="Makeup life, share cosmetics,shopping comestics, social network,post blog and vlog,payment">
    <meta name="description" content="Makeup toturial, recommand cosmetics,shopping comestics">
    <title>Makeup Life</title>
    <link rel="icon" href="<?php echo base_url()?>assets/images/KingF.ico" type="image/x-icon">
    <link rel="shor›tcut icon" href="<?php echo base_url()?>assets/images/KingF.ico" type="image/x-icon">
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css "/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/global.css"/>


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

    </style>

</head>

<body>
<div class="post-container">
    <h2><?=$title;?></h2>

    <!-- <?php echo var_dump($post); ?> -->

    <?php echo form_open_multipart('posts/update/' . $post['id']); ?>

    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <label>Select existing category</label>


    <div class="form-group">
        <select name="category_id" class="form-control" style="height: auto">
            <option selected value="<?php echo $post['category_id']; ?>"><?php echo $this->category_model->get_category($post['category_id'])->name; ?></option>
            <?php foreach ($categories as $category): ?>
                <?php if ($this->session->userdata('user_id') == $category['user_id']): ?>
                    <?php if ($category['name'] != $this->category_model->get_category($post['category_id'])->name): ?>
                        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                    <?php endif;?>
                <?php endif;?>
            <?php endforeach;?>
        </select>
    </div>

    <div class="form-group">
        <label>Add new category</label>
        <div class="blank10"></div>
        <input type="text" class="form-control" name="name" placeholder="Enter category name">
        <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Title</label>
        <div class="blank10"></div>
        <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
        <?php echo form_error('title', '<div class="text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Body</label>
        <div class="blank10"></div>
        <textarea id="editor1" class="form-control" name="body" placeholder="Add Body" style="height: 200px"><?php echo $post['body']; ?></textarea>
        <?php echo form_error('body', '<div class="text-danger">', '</div>'); ?>
    </div>


    <!-- <select name="category_id" class="form-control">
    <?php foreach ($categories as $category): ?>
      <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
    <?php endforeach;?>
  </select> -->
    <!-- how to set default image -->
    <div class="form-group">
        <label>Change Image</label>
        <div class="blank10"></div>
        <input type="file" name="userfile" size="20">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <div class="blank50"></div>


</div>

</body>
</html>


