<?php
  $GLOBALS['dirpre'] = '../';
  require_once($GLOBALS['dirpre'].'includes/header.php');

  Model::$test = true;

  require_once($GLOBALS['dirpre'].'tests/models/StudentModelTest.php');
  StudentModelTest::run();
  require_once($GLOBALS['dirpre'].
               'tests/controllers/modules/application/QuestionTest.php');
  QuestionTest::run();
?>