<?php
get_header();
echo "<h1>".get_the_title()."</h1>";
?>

   
   <?php
 the_content();
 ?>
 
  <?php the_field('video_daccueil');?>

   

<br>
<?php
$file = get_field('fichier_pdf');
if( $file ): ?>
    <a target="_blank" href="<?php echo $file['url']; ?>">mon pdf</a>
<?php endif; ?>
<?php
 get_footer();
 