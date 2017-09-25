<?php query_posts(array('showposts', 'posts_per_page'=> '1', 'post_type'=> 'issues')); while (have_posts()) { the_post(); ?>

<h2>Email Preview:</h2>

    <?php include (TEMPLATEPATH . '/loops/email.php' ); ?>

<h2>Email Code:</h2>

<textarea>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    
<html>
    <head>
        <style><!--
            body {
                margin:  0px;
                padding: 0px;
            }
        --></style>
    </head>
    <body>
    
        <?php include (TEMPLATEPATH . '/loops/email.php' ); ?>
    
    </body>
</html>
</textarea>

<?php } ?>