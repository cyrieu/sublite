<?php
  $GLOBALS['dirpre'] = 'app/';
  require_once($GLOBALS['dirpre'].'includes/header.php');
  $CStats->update();
  $CStats->nojobs();
  $CStats->students();
  $CStats->missingrecruiter();
  $CStats->recruiterbydate();
  require_once($GLOBALS['dirpre'].'includes/footer.php');
?>