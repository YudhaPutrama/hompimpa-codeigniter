    </div>
</div>
<!--jquery-->
<script src="/public/js/admin/jquery-2.1.4.min.js"></script>
<!--jquery-->
<!--semantic-->
<script src="/public/js/semantic.min.js"></script>
<!--semantic-->
<!--counter number-->
<script src="/public/vendor/counterup/jquery.counterup.min.js"></script>
<script src="/public/vendor/counterup/waypoints.min.js"></script>
<!--counter number-->
<!--flot chart-->
<script src="/public/vendor/flot/jquery.flot.js"></script>
<script src="/public/vendor/flot/jquery.flot.resize.min.js"></script>
<script src="/public/vendor/flot/jquery.flot.tooltip.min.js"></script>
<script src="/public/vendor/flot/curvedLines.js"></script>
<script src="/public/vendor/cookie/js.cookie.js"></script>
<!--flot chart-->
<!--chartjs chart-->
<script src="/public/vendor/chartjs/chart.min.js"></script>
<!--chartjs chart-->

<script src="/public/vendor/nicescrool/jquery.nicescroll.min.js"></script>

<script data-pace-options='{ "ajax": false }' src="/public/vendor/pacejs/pace.js"></script>

<script src="/public/vendor/chartist/chartist.min.js"></script>

<!--<script src="/public/vendor/tinymce/tinymce.min.js"></script>-->
<script src="/public/vendor/trumbowyg/trumbowyg.js"></script>
<!--<script src="/public/vendor/tinymce/themes/modern/theme.min.js"></script>-->
<script src="/public/js/admin/customjs/custom-editor.js"></script>

<script src="/public/js/admin/dashboard2.js"></script>
<script src="/public/js/admin/main.js"></script>


    <?php
if (isset($scripts))
    foreach ($scripts as $script){
        echo $script;
    }
?>

</body>

</html>