<?php

namespace App\Controllers;

class BlogController
{
  public function index()
  {
    echo 'je suis la homepage';
  }
  public function show(int $id)
  {
    echo 'voici l\'article '.$id;
  }
  public function contact()
  {
    echo 'je suis la page de contact';
  }
  public function about()
  {
    echo 'je suis la page about';
  }
}