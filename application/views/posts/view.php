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

    </style>

</head>

<body style="overflow-x: hidden">
<div class="post-container">
    <script type="text/javascript">
    function comment(post_id)
    {
        var content = $('#mycomment').val();
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('comments/create/'); ?>"+post_id,
                    data: {"post_id": post_id, "body": content},
                    dataType: 'json',
                    success: function (response) {
                    console.log(response);
                     $("#comment").html(response);
                    var body = response['body'];
                    var user = response['username']
                    var element = "<div class=\"well\" id=\"comment\">"+"<h5>"+body+"[by <strong>"+user+"</strong>]</h5>"+"</div>";
                    $('.comment-list').append(element);
                    $('#mycomment').val("");
                    }
                });
             console.log(content);
    }
</script>

<div class="post-container">

    <h2><?php echo $post['title']; ?></h2>
    <!-- <?php echo var_dump($post); ?> -->
    <small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <?php echo $this->category_model->get_category($post['category_id'])->name; ?></small><br>
    <small class="post-username">Author: <?php echo $this->user_model->fetchUserData($post['user_id'])['username']; ?></small><br>
    <div class="blank10"></div>
    <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
    <div class="blank10"></div>
    <div class="post-body" style="line-height: 22px;">
        <?php echo $post['body']; ?>
    </div>
    <div class="blank10"></div>

    <?php if ($this->session->userdata('user_id') == $post['user_id']): ?>
        <div class="blank10"></div>
        <ul>
        <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['id']; ?>">Edit</a>
        <?php echo form_open('/posts/delete/' . $post['id']); ?>
        <input type="submit" value="Delete" class="btn btn-danger" style="margin-left: 20px;">
        </form>
        </ul>
    <?php endif;?>

    <div class="blank50"></div>

    <?php if ($this->session->userdata('logged_in') == true): ?>

        <h3>Add Comment</h3>
        <div class="blank10"></div>
        <!-- <?php echo validation_errors(); ?> -->
        <div class="form-group">
            <label><?php echo $this->session->userdata('username'); ?></label>
        </div>
        <div class="form-group" >
            <textarea name="body" id="mycomment" class="form-control" style="height: 100px"></textarea>
            <?php echo form_error('body', '<div class="text-danger">', '</div>'); ?>

        </div>

        <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">

        <button class="btn btn-primary" type="button" id="comment_button" onclick="comment(<?php echo $post['id']; ?>)">Submit</button>

    <?php endif;?>

<ul>
    <h3>Comments</h3>
    <div class="comment-list">
    <?php if ($comments): ?>
        <?php foreach ($comments as $comment): ?>
            <div class="well" id="comment">
                <h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['username']; ?></strong>]</h5>
            </div>
        <?php endforeach;?>
    </div>

    <?php endif;?>
    </ul>
</div>
</div>





</body>
</html>
