<?php
  class Pages extends Controller{
    public function __construct(){

    }

    public function index() {
      $data = [
        'title' => 'SharePosts',
        'description' => 'Simple social network build on the Traversy MVC PHP framework'
      ];

      $this->view('pages/index', $data);
    } 

    public function about() {
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with another users'

      ];
      $this->view('pages/about', $data);
    }

  }