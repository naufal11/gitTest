<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_fitur extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $data['name'] = "Deva";
    $data['hobi'] = "Ngetik2 mungkin";
    $data['paragraf'] = "
    Kali ini mungkin bakalan jadi project iseng ke sekian kali ane. tapi kayaknya ane udah capek ngetik kata2 yg begini
    dan lagi pula bingung juga mw ngetik apalagi, ga kerasa udah mw capek baru ngetik segini, ya bginilah al hasil kalo
    lagi muncul kegabutan ane. udah ye ane pegel nanti gada yg mw mijitin pala ane hehe.. salam kenal ye codeigniter and github.";
    $data['full_name'] = "Muhamad Deva Arofi";
    $this->load->view('view_deva', $data);
  }

}
