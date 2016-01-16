<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../public/myStyle.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\book\book;
use \src\bitm\SEIP107992\message\message;
$book=new book();
$books=$book->index();
 



/** Error reporting */
/*error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);*/
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
include_once("../../../"."vendor/phpoffice/phpexcel/Classes/PHPExcel.php");

//require_once $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProject'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'phpoffice'.DIRECTORY_SEPARATOR.'phpexcel'.DIRECTORY_SEPARATOR.'Classes'.DIRECTORY_SEPARATOR.'PHPExcel.php';



// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("BITM")
							 ->setLastModifiedBy("BITM")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");


$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ISBN')
            ->setCellValue('B1', 'Book Title')
            ->setCellValue('C1', 'Author');
$counter = 2;
foreach($books as $book){
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$counter, $book['ISBN'])
            ->setCellValue('B'.$counter, $book['book_title'])
            ->setCellValue('C'.$counter, $book['book_author']);
    $counter++;
}

        
      
         

//// Miscellaneous glyphs, UTF-8
//$objPHPExcel->setActiveSheetIndex(0)
//            ->setCellValue('A4', 'Miscellaneous glyphs')
//            ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Book Data"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;