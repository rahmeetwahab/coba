<?php
    $data = file_get_contents("https://data.covid19.go.id/public/api/skor.json");
    $covid = json_decode($data);
    $table = "<h3>Data Risiko COVID-19 Seluruh Provinsi Indonesia</h3>";
    $table .= "<p>Tanggal: {$covid->tanggal}</p>
                <table border=1>
                <tr><td>No</td>
                <td>Provinsi</td>
                <td>Kota</td>
                <td>Hasil Resiko</td></tr>";
    
    for($i = 0;$i < count($covid->data);$i++){
        $no = $i+1;
        $table .= "<tr><td>{$no}</td>
                    <td>{$covid->data[$i]->prov}</td>
                    <td>{$covid->data[$i]->kota}</td>
                    <td>{$covid->data[$i]->hasil}</td>
                    </tr>";
    }

    $table .= "</table>";
    echo $table;
?>