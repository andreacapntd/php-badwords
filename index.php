 <!-- Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

 <?php

  $word =$_GET['word'];
  $new_word = '***';
  $paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'

  ?>

  <p>
    <?php

     var_dump($paragraph);
     $new_paragraph = str_replace($word, $new_word, $paragraph );
     echo '<br />';
     echo '<br />';
     var_dump ($new_paragraph);


    ?>
  </p>
