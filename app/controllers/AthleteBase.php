<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class AthleteBase extends Controller {

      public function __construct() {
        $this->AthleteModel = $this->model('_AthleteBase'); //name your model
      }

      public function index() {
        $info = $this->AthleteModel->GetAll();
        $data = [
          'getAll' => $info
        ];

        $this->view('pages/athlete-base-view', $data);
      }
    }
