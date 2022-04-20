<?php

mysqli_connect('localhost','root','') or die('Cannot connect to server');
mysqli_select_db(mysqli_connect('localhost','root',''),'attmgsystem') or die ('Cannot found database');

?>