<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
  public function index()
  {
      $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/laravelfirebase-9d875-firebase-adminsdk-wltre-a1b8486a6c.json');
      $firebase = (new Factory)
      ->withServiceAccount($serviceAccount)
      ->withDatabaseUri('https://laravelfirebase-9d875.firebaseio.com/')
      ->create();

      $database = $firebase->getDatabase();

      $newPost = $database
      ->getReference('users')
      ->push([
      'title' => 'Consumidores' ,
      'category' => 'Laravel'
      ]);
      echo '<pre>';
      print_r($newPost->getvalue());
  }
}
