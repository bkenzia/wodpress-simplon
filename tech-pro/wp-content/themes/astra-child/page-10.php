<?php
get_header();
echo "<h1>".get_the_title()."</h1>";


 the_content();
 echo "auteur : ". get_field('nom')." ".get_field('prenom');

 get_footer();