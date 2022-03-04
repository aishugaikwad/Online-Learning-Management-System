<!--Copy this into your website or website generator, in the HTML section.-->
<!DOCTYPE html>
<html lang="en">
<head>
<style>
  h1{
  text-align:center;
  margin-bottom:50px;
  margin-top:50px;
}
.blog-card-blog {
    margin-top: 30px;
}
.blog-card {
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 30px;
    border-radius: 6px;
    color: rgba(0, 0, 0, 0.87);
    background: #fff;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.blog-card .blog-card-image {
    height: 60%;
    position: relative;
    overflow: hidden;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border-radius: 6px;
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.blog-card .blog-card-image img {
    width: 100%;
    height: 100%;
    border-radius: 6px;
    pointer-events: none;
}
.blog-card .blog-table {
    padding: 15px 30px;
}
.blog-table {
    margin-bottom: 0px;
}
.blog-category {
    position: relative;
    line-height: 0;
    margin: 15px 0;
}
.blog-text-success {
    color: #28a745!important;
}
.blog-card-blog .blog-card-caption {
    margin-top: 5px;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.blog-card-caption, .blog-card-caption a {
    color: #333;
    text-decoration: none;
}

p {
    color: #3C4857;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.blog-card .ftr {
    margin-top: 15px;
}
.blog-card .ftr .author {
    color: #888;
}

.blog-card .ftr div {
    display: inline-block;
}
.blog-card .author .avatar {
    width: 36px;
    height: 36px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 5px;blog-
}
.blog-card .ftr .stats {
    position: relative;
    top: 1px;
    font-size: 14px;
}
.blog-card .ftr .stats {
    float: right;
    line-height: 30px;
}
</style>
<?php if ($page_name == 'course_page'):
		$title = $this->crud_model->get_course_by_id($course_id)->row_array()?>
		<title><?php echo $title['title'].' | '.get_settings('system_name'); ?></title>
	<?php else: ?>
		<title><?php echo ucwords($page_title).' | '.get_settings('system_name'); ?></title>
	<?php endif; ?>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="<?php echo get_settings('author') ?>" />

	<?php
	$seo_pages = array('course_page');
	if (in_array($page_name, $seo_pages)):
	$course_details = $this->crud_model->get_course_by_id($course_id)->row_array();?>
		<meta name="keywords" content="<?php echo $course_details['meta_keywords']; ?>"/>
		<meta name="description" content="<?php echo $course_details['meta_description']; ?>" />
	<?php else: ?>
		<meta name="keywords" content="<?php echo get_settings('website_keywords'); ?>"/>
		<meta name="description" content="<?php echo get_settings('website_description'); ?>" />
	<?php endif; ?>

	<link name="favicon" type="image/x-icon" href="<?php echo base_url().'uploads/system/favicon.png' ?>" rel="shortcut icon" />
	<?php include 'includes_top.php';?>

</head>
<body class="gray-bg">
	<?php
	if ($this->session->userdata('user_login')) {
		include 'logged_in_header.php';
	}else {
		include 'logged_out_header.php';
	}?>
<script>
 $(function () {

// Initate masonry grid
var $grid = $('.gallery-wrapper').masonry({
    temSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
});

// Initate imagesLoaded
$grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
});

});
</script>
<h1>News</h1>
<div class="container">
  <div class="row">
    <div class="col-md-4">
  <div class="blog-card blog-card-blog">
    <div class="blog-card-image">
        <a href="#"> <img class="img" src="https://picsum.photos/id/1084/535/353?grayscale"> </a>
        <div class="ripple-cont"></div>
    </div>
    <div class="blog-table">
        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
        <h4 class="blog-card-caption">
            <a href="#">Lorem Ipsum is simply dummy text of the printing and</a>
        </h4>
        <p class="blog-card-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="ftr">
            <div class="author">
                <a href="#"> <img src="https://picsum.photos/id/1005/5760/3840" alt="..." class="avatar img-raised"> <span>Lorem</span> </a>
            </div>
            <div class="stats"> <i class="far fa-clock"></i> 10 min </div>
        </div>
    </div>
</div>
</div>
    
    
    <div class="col-md-4">
  <div class="blog-card blog-card-blog">
    <div class="blog-card-image">
        <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
        <div class="ripple-cont"></div>
    </div>
    <div class="blog-table">
        <h6 class="blog-category blog-text-success"><i class="fas fa-blog"></i> News</h6>
        <h4 class="blog-card-caption">
            <a href="#">Lorem Ipsum is simply dummy text of the printing and</a>
        </h4>
        <p class="blog-card-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="ftr">
            <div class="author">
                <a href="#"> <img src="https://picsum.photos/id/1005/5760/3840" alt="..." class="avatar img-raised"> <span>Lorem</span> </a>
            </div>
            <div class="stats"> <i class="far fa-clock"></i> 10 min </div>
        </div>
    </div>
</div>
</div>
    
    <div class="col-md-4">
  <div class="blog-card blog-card-blog">
    <div class="blog-card-image">
        <a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
        <div class="ripple-cont"></div>
    </div>
    <div class="blog-table">
        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
        <h4 class="blog-card-caption">
            <a href="#">Lorem Ipsum is simply dummy text of the printing and</a>
        </h4>
        <p class="blog-card-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="ftr">
            <div class="author">
                <a href="#"> <img src="https://picsum.photos/id/1005/5760/3840" alt="..." class="avatar img-raised"> <span>Lorem</span> </a>
            </div>
            <div class="stats"> <i class="far fa-clock"></i> 10 min </div>
        </div>
    </div>
</div>
</div>
  </div>
</div>
<?php
	include 'footer.php';
	include 'includes_bottom.php';
	include 'modal.php';
	?>

</body>
</html>