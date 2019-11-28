<?php
include("class.php");
$Aes = new Aes;
echo $Aes->encrypt("Simple Encrypt"); // Result => lopoge/3ejNFKXmC1DeqcQ==
echo $Aes->decrypt("lopoge/3ejNFKXmC1DeqcQ=="); // Result => Simple Encrypt
