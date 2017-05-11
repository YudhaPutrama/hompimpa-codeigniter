  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="#" class="header item">
        Hompimpa
      </a>
      <a href="#" class="item">Home</a>
      <div class="ui simple dropdown item">
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
      </div>
    </div>
  </div>

  <div class="ui main text container">
    <h1 class="ui header"><?php echo $title; ?></h1>

<?php echo validation_errors(); ?>

<?php echo form_open('article/create',"class='ui form'"); ?>
    <div class="field">
        <label for="title">Title</label>
        <input type="text" name="title" />
    </div>
    <div class="field">
        <label for="text">Content</label>
        <textarea name="content"></textarea>
    </div>
    <div class="field">
        <label for="text">TANGGAL</label>
        <textarea name="TANGGAL"></textarea>
    </div>
    <!--<div class="field">
        <label for="text">Images</label>
        <input type="file" name="image">
    </div>-->
    <div class="field">
        <button class="ui primary button" type="submit">
            Save
        </button>
        <button class="ui button" type="reset">
            Discard
        </button>
    </div>
</form>
    
    
  </div>

  <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <!--<h4 class="ui inverted header">Group 1</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>-->
        </div>
        <div class="three wide column">
          <!--<h4 class="ui inverted header">Group 2</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>-->
        </div>
        <div class="three wide column">
          <!--<h4 class="ui inverted header">Group 3</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>-->
        </div>
        <div class="seven wide column">
          <!--<h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>-->
        </div>
      </div>
      <div class="ui inverted section divider"></div>
      <!--<img src="assets/images/logo.png" class="ui centered mini image">
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
      </div>-->
    </div>
  </div>