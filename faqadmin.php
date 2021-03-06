<?php
// ************************************************************************************//
// * D� Source 2018
// ************************************************************************************//
// * Author: D@rk-�vil�
// ************************************************************************************//
// * Version: 2.0
// * 
// * Copyright (c) 2017 - 2018 D@rk-�vil�. All rights reserved.
// ************************************************************************************//
// * License Typ: Creative Commons licenses
// ************************************************************************************// 
ob_start("ob_gzhandler");
require_once(dirname(__FILE__) . "/include/engine.php");

// Lade Faq Klasse
require_once(dirname(__FILE__) . "/include/Classes/Faq.php");
dbconn(true);
loggedinorreturn();
check_access(UC_ADMINISTRATOR);
security_tactics();	

x264_admin_header("FAQ");

$action = $_GET['action'];
$Faq = new Faq();

switch($action) {
	case '':
			$Faq->FaqAdmin();
			break;
	case 'createcategory':
			$Faq->CreateFaqCategoryForm();
			break;
	case 'docreatecategory':
			$Faq->CreateFaqCategoryDo();
			break;
	case 'createquestion':
			$Faq->CreateFaqQuestionForm();
			break;
	case 'docreatequestion':
			$Faq->CreateFaqQuestionDo();
			break;
	case 'editcategory':
			$Faq->EditFaqCategoryForm($_GET['cid']);
			break;
	case 'doeditcategory':
			$Faq->EditFaqCategoryDo();
			break;
	case 'editquestion':
			$Faq->EditFaqQuestionForm($_GET['qid']);
			break;
	case 'doeditquestion':
			$Faq->EditFaqQuestionDo();
			break;
	case 'deletecategory':
			$Faq->deleteCategory($_GET['cid']);
			break;
	case 'deletequestion':
			$Faq->deleteQuestion($_GET['qid']);
			break;
}

x264_admin_footer();
?>