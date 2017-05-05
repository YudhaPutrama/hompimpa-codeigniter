<?php include "templates/header.php" ?>
<!--maincontent-->
<div class="mainWrap navslide">
    <div class="ui equal width left aligned padded grid stackable">
        <div class="row">
            <div class="sixteen wide tablet four wide computer column">
                <div class="ui segment left aligned">
                    <div class="ui  statistic">
                        <div class="value counter">
                            <?php echo $this->user_model->get_count_user() ?>
                        </div>
                        <div class="label">
                            Pengguna
                        </div>
                        <i class="icon ion-person teal statisticIcon"></i>
                    </div>
                    <div id="flot-order" class="flotchart"></div>
                </div>
            </div>

            <div class="sixteen wide tablet four wide computer column">

                <div class="ui segment left aligned">

                    <div class="ui  statistic">
                        <div class="value counter">
                            <?php echo $this->article_model->get_count_news() ?>
                        </div>
                        <div class="label">
                            Artikel
                        </div>
                        <i class="icon ion-chatbubbles blue statisticIcon"></i>
                    </div>
                    <div id="flot-avarage" class="flotchart"></div>
                </div>
            </div>
            <div class="sixteen wide tablet four wide computer column">

                <div class="ui segment left aligned">

                    <div class="ui  statistic">
                        <div class="value counter">
                            <?php echo $this->comment_model->get_count() ?>
                        </div>
                        <div class="label">
                            Komentar
                        </div>
                        <i class="icon ion-magnet purple statisticIcon"></i>
                    </div>
                    <div id="flot-saves" class="flotchart"></div>
                </div>
            </div>
            <div class="sixteen wide tablet four wide computer column">

                <div class="ui segment left aligned">

                    <div class="ui  statistic">

                        <div class="value counter">
                            <?php echo $this->game_model->get_count_game() ?>
                        </div>
                        <div class="label">
                            Permainan
                        </div>
                        <i class="icon ion-trophy red statisticIcon"></i>
                    </div>
                    <div id="flot-view" class="flotchart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--maincontent-->
<?php include "templates/footer.php" ?>