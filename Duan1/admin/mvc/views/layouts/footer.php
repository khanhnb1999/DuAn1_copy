
</div>
<footer class="footer"></footer>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/public/script/main.js"></script>
<script>
    $(document).ready(function(){
        if($("#editor1").length){
            CKEDITOR.replace('editor1');
        }
        if($("#editor2").length){
            CKEDITOR.replace('editor2');
        }
    });
     
</script>
</body>

</html>