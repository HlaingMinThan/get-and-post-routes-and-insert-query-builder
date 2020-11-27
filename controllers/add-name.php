<?php
   $database->insert([
       'name'=>$_POST['name']
   ], "users");

   header("Location: /");
