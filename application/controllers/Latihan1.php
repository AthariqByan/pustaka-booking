<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller{

     public function __construct()
     {
          parent::__construct();
          //Codeigniter : Write Less Do More
     }

     function index()
     {
          echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo explicabo deleniti corporis expedita veritatis deserunt, reprehenderit nulla, ab commodi consequuntur porro excepturi odio consectetur ut beatae, blanditiis sint mollitia quia?";
     }

}