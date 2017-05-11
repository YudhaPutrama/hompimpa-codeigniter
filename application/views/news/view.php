  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="#" class="header item">
        Hompimpa
      </a>
      <a href="#" class="item">Home</a>
      <a href="../article" class="item">Article</a>
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
  <div class="ui main text container">
      <h1 class="ui header"><?php echo $news_item['TITLE']; ?></h1>
  </div>
  <div class="ui main text container">
    <div class="ui right floated main menu">
      <a class="edit popup icon item" data-content="Edit" href="<?php echo site_url('article/'.$news_item['SLUG'].'/edit'); ?>">
        <i class="edit icon"></i>
      </a>
      <a class="trash popup icon item" data-content="Hapus" href="<?php echo site_url('article/'.$news_item['SLUG'].'/delete'); ?>">
        <i class="trash icon"></i>
      </a>
    </div>
    <p>
        <?php echo $news_item['TEXT']; ?>
    </p>
  </div>
  <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
      </div>
    </div>
  </div>