<?php  

$domain = $_GET['domain'];
$domain = str_replace('.', '_', $domain);

$domain = "site_{$domain}";

$random_bot_name = file_get_contents("https://alreferal.ru/get_random_bot_hash.php?hash_id=03f5652911133e62454158a3ee6294de86d9de7629e5e13a8e00f24084cec0bb");

$url_redirect =  "https://t.me/{$random_bot_name}/?start={$domain}";
header("Location: {$url_redirect}");
die();
?>