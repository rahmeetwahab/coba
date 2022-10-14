<?php
    $data = file_get_contents("https://indonesia-public-static-api.vercel.app/api/heroes");
    $pahlawan = json_decode($data);
    $table = "<h3>Indonesian Heroes</h3>";
    $table .= "<table border=1>
                <tr><td>No</td>
                <td>Name</td>
                <td>Brith Year</td>
                <td>Death Year</td>
                <td>Description</td>
                <td>Ascension Year</td></tr>";
    
    for($i = 0;$i < count($pahlawan);$i++){
        $no = $i+1;
        $table .= "<tr><td>{$no}</td>
                    <td>{$pahlawan[$i]->name}</td>
                    <td>{$pahlawan[$i]->birth_year}</td>
                    <td>{$pahlawan[$i]->death_year}</td>
                    <td>{$pahlawan[$i]->description}</td>
                    <td>{$pahlawan[$i]->ascension_year}</td>
                    </tr>";
    }

    $table .= "</table>";
    echo $table;
?>