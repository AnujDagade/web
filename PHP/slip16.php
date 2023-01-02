<?php

    $sr = $_POST['sr'];
    $sn = $_POST['sn'];
    $mk = $_POST['mk'];

    $serial = explode(" ",$sr);
    $subject = explode(" ", $sn);
    $marks = explode(" ", $mk);

    

    print_r($serial);
    print_r($subject);
    print_r($marks);
    

    echo "<table border=1 width=100%";
    echo "<tr>";
    
    echo "<th>";
    echo "Serial";
    echo "</th>";
    echo "<th>";
    echo "Subjects";
    echo "</th>";
    echo "<th>";
    echo "Marks";
    echo "</th>";

    echo "</tr>";

    
    for($i=0; $i<count($serial); $i++)
    {
        echo "<tr>";
        echo "<td>".$serial[$i]."</td>";
        echo "<td>".$subject[$i]."</td>";
        echo "<td>".$marks[$i]."</td>";
            
        echo "</td";
        echo "</tr>";
    }
    

    echo "</table>";

    

?>