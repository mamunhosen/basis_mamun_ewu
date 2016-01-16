
<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();
include_once("../../../"."vendor/autoload.php");
use \src\bitm\SEIP107992\book\book;
use \src\bitm\SEIP107992\message\message;
$book=new book();
$books=$book->index();
$trs = "";

?>


                
                <?php
                $slno =0;
                foreach($books as $book):
                    $slno++;
                    $trs .="<tr>";
                    $trs .="<td>".$slno."</td>";
                    $trs .="<td>".$book['ISBN']."</td>";
                    $trs .="<td>".$book['book_title']."</td>";
                    $trs .="<td>".$book['book_author']."</td>";
                    $trs .="</tr>";
                 endforeach;   
                ?>


<?php

$html = <<<BITM
<!DOCTYPE html>
 <html lang="en">
   <head>
        <title>List of Books</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../public/myStyle.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       
    
    </head>
    
    <body>
        <h1>List Of Books</h1>
     
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Serial No &dArr;</th>

                    <th>ISBN &dArr;</th>
                    
                    <th>Book Title &dArr;</th>
                    
                    <th>Book Author &dArr;</th>
                  
                     
                
                </tr>
            </thead>
            <tbody>
        
              echo $trs;
        
        
        
        </tbody>
        </table>
       
        
            

    </body>
</html>
BITM;
?>
<?php

/*require_once $_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."AtomicProject".DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR.'mpdf'.DIRECTORY_SEPARATOR.'mpdf'.DIRECTORY_SEPARATOR.'mpdf.php';
*/
require_once("../../../"."vendor/mpdf/mpdf/mpdf.php");

$mpdf = new mPDF('c');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;