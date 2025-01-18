<?php

    require_once('./models/reportManager.php');

    $allReports = getAllReports();

    $template = "./views/pages/report.php";