<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM' ,
    CURLOPT_RETURNTRANSFER => true ,
    CURLOPT_ENCODING => '' ,
    CURLOPT_MAXREDIRS => 10 ,
    CURLOPT_TIMEOUT => 0 ,
  
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1 ,
    CURLOPT_CUSTOMREQUEST => 'GET' ,
));

$response = curl_exec($curl);
curl_close($curl);
$response_array = json_decode ($response,true);

$onscreen = '<table class="table" width="100">
                <thead>
                    <th>KodeBarang</th>
                    <th>NamaBarang</th>
                    <th>HargaJual</th>
                    <th>Quantity</th>
                    <th>TotalAset</th>
                <thead>
            ';
foreach ($response_array as $resp) {
    $onscreen.='<tr>
                    <td>'.$resp['kodebarang'].'</td>
                    <td>'.$resp['namabarang'].'</td>
                    <td>'.$resp['hargajual'].'</td>
                    <td>'.$resp['quantity'].'</td>
                    <td>'.$resp['totalaset'].'</td>
                </tr>';
}
$onscreen.='</table>';
echo $onscreen;