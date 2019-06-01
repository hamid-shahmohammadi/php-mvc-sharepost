<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'PHP MVC',
        'description'=>'Simple Social Network'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Us',
            'description'=>'App to share posts with other users'
        ];

      $this->view('pages/about', $data);
    }
    public function show($p,$t){
        $data=[
            'p'=>$p,
            't'=>$t
        ];
        $this->view('pages/show',$data);
    }
  }