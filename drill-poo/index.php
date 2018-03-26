<?php
require 'classHtml.php';
require 'classForm.php';





$form = new Form($_POST);
?>

<form action="#" method"post">
    <?php

echo $form->input('Username');
echo $form->input('Password');
echo $form->checkbox('Gender');
echo $form->radio('Like');
echo $form->textarea();
echo $form->submit();
    ?>
</form>
