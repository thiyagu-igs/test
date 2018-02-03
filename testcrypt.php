<?php
include('crypt.php');
$obj=new Cryptography();
$src = $obj->Encrypt('testdoc.docx','testdoc_des.docx');
$src1 = $obj->Decrypt('testdoc_des.docx','testdoc_de.docx');
?>