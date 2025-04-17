<?php
include_once __DIR__ . '/../A_Models/BLOG_Blog.php';


$testOBJ = new BLOG_Blog();


$myaraa= $testOBJ->selectblog();


$myaraa = $testOBJ->selectblog();

// Reset the array pointer just in case
reset($myaraa);

while ($item = current($myaraa)) {
    // Print blog data
    echo "<h3>" . $item['BlogTitle'] . "</h3>";
    echo "<h3>" . $item['BlogContent'] . "</h3>";

  
    
    // Move to next item
    next($myaraa);
}



?>