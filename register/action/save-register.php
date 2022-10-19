<?php

require_once "../../connection.php";

$inputdata = $_POST['inputdata'];
$data = [];

foreach ($inputdata as $inputdatax) {
    $data[$inputdatax['name']] = $inputdatax['value'];
}


$length = 8;    
$barcodename = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

    $insert = $conn->prepare("INSERT INTO tblparticipants (fullname, email, contactno, sex, age, barcodename, affiliation,
    mun_city
    ,province
    ,inst_agency
    ,inst_agency_name
    ,designation) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    $insert->execute([$data['fullname'],$data['email'],$data['contactno'],$data['sex'],$data['age'],$barcodename,$data['affiliation'],$data['mun_city'],$data['province'],$data['inst_agency'],$data['inst_agency_name'],$data['designation']]);

    echo $barcodename;
?>