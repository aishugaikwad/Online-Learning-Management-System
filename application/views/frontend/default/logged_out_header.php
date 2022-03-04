<style>

 #header{
	  display: none; 
 }
    @media screen and (max-width: 600px) {
  #nav {
    visibility: hidden;
    display: none;
  }
  #header{
	  display: block;
}


    </style>
<section class="menu-area">
  <div class="container-xl">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <ul class="mobile-header-buttons">
            <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>
            <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
          </ul>

          <a href="<?php echo site_url(''); ?>" class="navbar-brand" href="#"><img src="<?php echo base_url() . 'uploads/system/logo-dark.png'; ?>" alt="" height="100" width="120"></a>
          <a id="nav" class="nav-link" href="<?php echo site_url('home'); ?>"><?php echo get_phrase('Home'); ?></a>
                    <a id="nav" class="nav-link" href="<?php echo site_url('home/about_us'); ?>"><?php echo get_phrase('About us'); ?></a>
                    <a id="nav" class="nav-link" href="<?php echo site_url('home/news'); ?>"><?php echo get_phrase('News'); ?></a>
                    <a id="nav" class="nav-link " href="<?php echo site_url('#course'); ?>"><?php echo get_phrase('Course'); ?></a>
                    <a id="nav" class="nav-link " href="<?php echo site_url('#product'); ?>"><?php echo get_phrase('Product'); ?></a>
                    <a id="nav" class="nav-link" href="<?php echo site_url('home/product'); ?>"><?php echo get_phrase('Gallery'); ?></a>
          <?php include 'menu.php'; ?>

          <form class="inline-form" action="<?php echo site_url('home/search'); ?>" method="get" style="width: 25%;">
            <div class="input-group search-box mobile-search">
              <input type="text" name='query' class="form-control" placeholder="<?php echo get_phrase('search_for_courses'); ?>">
              <div class="input-group-append">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>

          <?php if ($this->session->userdata('admin_login')) : ?>
            <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="<?php echo site_url('admin'); ?>" style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;"><?php echo get_phrase('administrator'); ?></a>
              </div>
            </div>
          <?php endif; ?>

          <div class="cart-box menu-icon-box" id="cart_items">
            <?php include 'cart_items.php'; ?>
          </div>

          <span class="signin-box-move-desktop-helper"></span>
          <div class="sign-in-box btn-group">

          <a id="header" class="nav-link" href="<?php echo site_url('home/product'); ?>"><?php echo get_phrase('Gallery'); ?></a>
          <a id="header" class="nav-link " href="<?php echo site_url('#product'); ?>"><?php echo get_phrase('Product'); ?></a>
          <a id="header" class="nav-link " href="<?php echo site_url('#course'); ?>"><?php echo get_phrase('Course'); ?></a>
          <a id="header" class="nav-link" href="<?php echo site_url('home/news'); ?>"><?php echo get_phrase('News'); ?></a>
          <a id="header" class="nav-link" href="<?php echo site_url('home/about_us'); ?>"><?php echo get_phrase('About us'); ?></a>
          <a id="header" class="nav-link" href="<?php echo site_url('home'); ?>"><?php echo get_phrase('Home'); ?></a>
                   
                    
                  
                    
                    
            <a href="<?php echo site_url('home/login'); ?>" class="btn btn-sign-in"><?php echo get_phrase('log_in'); ?></a>

            <a href="<?php echo site_url('home/sign_up'); ?>" class="btn btn-sign-up"><?php echo get_phrase('sign_up'); ?></a>
          </div>
           <!--  sign-in-box end -->
        </nav>
      </div>
    </div>
  </div>
</section>