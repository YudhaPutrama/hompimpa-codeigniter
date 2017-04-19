  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="<?php echo base_url();?>" class="header item">
        Hompimpa
      </a>
      <a href="#" class="item">Home</a>
      <!--<div class="ui simple dropdown item">
        Dropdown <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="#">Link Item</a>
          <a class="item" href="#">Link Item</a>
          <div class="divider"></div>
          <div class="header">Header Item</div>
          <div class="item">
            <i class="dropdown icon"></i>
            Sub Menu
            <div class="menu">
              <a class="item" href="#">Link Item</a>
              <a class="item" href="#">Link Item</a>
            </div>
          </div>
          <a class="item" href="#">Link Item</a>
        </div>
      </div>-->
    </div>
  </div>
  <div class="ui main text center aligned container">
      <h1 class="ui header"><?php echo "Article Post"; ?></h1>
<!--      <div class="ui right floated main menu">-->
<!--        <a class="add popup icon item" data-content="Tambah" href="--><?php //echo site_url('article/create'); ?><!--">-->
<!--          <i class="add icon"></i>-->
<!--        </a>-->
<!--      </div>-->
      <!--<h3 class="first">Container</h3>
      <p>A container is a fixed width element that wraps your site's content. It remains a constant size and uses <b>margin</b> to center. Containers are the simplest way to center page content inside a grid.</code>-->
      <!--</p>-->
  </div>
  

  
<?php foreach ($news as $news_item): ?>
  <div class="ui text container segment">
    <div class="ui right floated main menu">
      <a class="edit popup icon item" data-content="Edit" href="<?php echo site_url('article/'.$news_item['SLUG'].'/edit'); ?>">
        <i class="edit icon"></i>
      </a>
      <a class="trash popup icon item" data-content="Hapus" href="<?php echo site_url('article/'.$news_item['SLUG'].'/delete'); ?>">
        <i class="trash icon"></i>
      </a>
    </div>
    <h2 class="ui dividing header"><?php echo $news_item['TITLE']; ?></h2>
    <p>
            <?php echo $news_item['TEXT']; ?>
    </p>
    <p><a href="<?php echo site_url('article/'.$news_item['SLUG']); ?>">View article</a></p>
  </div>
<?php endforeach; ?>
  

  <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <!--<div class="ui stackable inverted divided grid">-->
        <!--<div class="three wide column">-->
          <!--<h4 class="ui inverted header">Group 1</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>-->
        <!--</div>-->
        <!--<div class="three wide column">-->
          <!--<h4 class="ui inverted header">Group 2</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>-->
        <!--</div>-->
        <!--<div class="three wide column">-->
          <!--<h4 class="ui inverted header">Group 3</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>-->
        <!--</div>-->
        <!--<div class="seven wide column">-->
          <!--<h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>-->
        <!--</div>-->
      <!--</div>-->
      <!--<div class="ui inverted section divider"></div>-->
      <!--<img src="assets/images/logo.png" class="ui centered mini image">-->
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
      </div>
    </div>
  </div>