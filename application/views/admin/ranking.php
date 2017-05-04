<?php include "templates/header.php" ?>
    <div class="mainWrap navslide">
        <div class="ui equal width left aligned padded grid stackable">
            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui segments">
                        <div class="ui segment">
                            <h5 class="ui header">
                                Ranking
                            </h5>
                        </div>
                        <div class="ui segment">

                            <div class="ui list">
                                <?php
                                foreach ($rankings as $rank) {
                                ?>
                                <div class="item">
                                    <img class="ui avatar image" src="img/avatar/people/carol.png"
                                         alt="label-image"/>
                                    <div class="content">
                                        <a class="header"><?php echo $rank['NAMA']; ?></a>
<!--                                        <div class="description">Last seen watching <a><b></b></a> just now.</div>-->
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include "templates/footer.php" ?>