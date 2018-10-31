<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<meta charset="gb2312">
<meta name="keywords" content="Makeup life, share cosmetics,shopping comestics, social network,post blog and vlog,payment">
<meta name="description" content="Makeup toturial, recommand cosmetics,shopping comestics">
<title>Write post</title>
<link rel="icon" href="" type="image/x-icon">
<link rel="shortcut icon" href="../../../../../../../../Users/yueyi/Desktop/project/cosmetic/images/KingF.ico" type="../images/x-icon">
<!-- Global CSS -->
<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/global.css"/>
<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css"/>

<style>
	#post{
		position: relative;
		width:1120px;
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

<div id="pt" class="bm cl">
<div class="z">
<span class="marginR10">Your current position:</span><a href="#">Profile</a> <em class="marginL10 marginR10">>></em> <a href="#">Write posts</a>
</div>
</div>


  <div id="post"> 
   <div class="form-group">
    <label>Choose an existing category</label>
    <select name="category_id" class="form-control">
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
      <input type="text" class="form-control" name="name" placeholder="Enter category name">
      <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
    </div>

  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
    <?php echo form_error('title', '<div class="text-danger">', '</div>'); ?>
  </div>

  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
    <?php echo form_error('body', '<div class="text-danger">', '</div>'); ?>
  </div>

  <div class="form-group">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>


<!--footer-->
<div class="footer">
  <div class="footer-inner">
    <dl class="site-links fn-left fn-clear relation-links">
      <dt class="first-letter-border">New to here</dt>
      <dd> <a target="_self" class="am-link " href="../../../../cosmetic/newbie.html">Website Nevigate</a> <a target="_self" class="am-link " href="../../../../cosmetic/newbie.html">How to Post</a> </dd>
    </dl>
    <dl class="site-links fn-left friend-links">
      <dt class="first-letter-border">CUSTOMER SERVICE</dt>
      <dd><a target="_self" class="am-link " href="#">Terms</a> <a target="_self" class="am-link " href="#">Privacy Policy</a> <br /> <a target="_self" class="am-link " href="#">Help center</a></dd>
    </dl>
    <dl class="site-links fn-left friend-links">
      <dt class="first-letter-border">FAQ</dt>
      <dd> <a target="_self" class="am-link " href="../../../../cosmetic/help_invest_transfer.html">How to post</a> <a target="_self" class="am-link " href="#">How to buy</a> <a target="_self" class="am-link " href="#">How to like</a></dd>
    </dl>
    <dl class="site-links fn-left friend-links">
      <dt class="first-letter-border">ABOUT</dt>
      <dd><a target="_self" class="am-link " href="#">About Us</a> <a target="_self" class="am-link " href="#">About the website</a> <a target="_self" class="am-link " href="#">Join Us</a> <a target="_blank" class="am-link " href="#">Contact Us</a></dd>
    </dl>
    <dl class="site-links fn-clear">
      <dt class="first-letter-border">Need help?</dt>
      <div class="callus"><span class="f28px">0400-000-000</span> </div>
      <div><span class="f12px">Mon-Fir:9:00-21:00/Sat-Sun9:00-18:00</span></div>
      <div class="callus"><span class="f28px">Emails</span> </div>
      <dd class="sns-links fn-clear"> <a target="_blank" href="#"> <img src="../../../../cosmetic/Images/twitterIcon.png" alt="twitter"> </a> <a target="_blank" href="#"> <img src="/Images/SinaIcon.png" alt="新浪微博"> </a> <a target="_blank" href="#"> <img src="/Images/linkedin.png" alt="LinkIn"> </a> </dd>
    </dl>
    <div class="copyright f14px">ICP:20100257 <span>Copyright @SS Bank services. All Right Reserved.</span></div>
    <div class="blank0"></div>
  </div>
</div>

<!--JavaScript-->
<script type="text/javascript" src="../../../assets/jquery/jquery.min.js"></script> 
<script type="text/javascript" src="../../../assets/jquery/bootstrap.min.js"></script> 

</body>
</html>