<?php
the_content();
?>
<div class="container">
 <span class="comment"><a href="#comments"><i class="fa fa-comment"></i><?php comments_nmber();?></a></span>
</div>
<?php
comments_template();
?>