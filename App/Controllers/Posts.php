<?php
namespace App\Controllers;
/**
 * Posts Controller
 */

 class Posts {
     /**
      * show the index page
      * @return void
      */
      public function index(){
          echo 'Hello from the index action in teh Posts controller!';
          echo '<p>Query string parameters: <pre>' . 
          htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
      }

      /**
      * show the index page
      * @return void
      */
      public function addNew(){
          echo 'hello form addNew action in the Posts controller';
      }
 }