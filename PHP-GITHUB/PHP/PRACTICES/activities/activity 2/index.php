<?php
$url = "https://testurl.com/test/1234?email=abc@test.com&name=sarah";
$components = parse_url($url);
// parse_url defince shecma, file host, path and query in link 
//[scheme] => https
//[host] => testurl.com
// [path] => /test/1234
//[query] => email=abc@test.com&name=sarah
print_r(($components));


// $_GET is surper global variable 
// page is the query variable on URL website 
$_frese = $_GET["page"];
echo $_frese;

echo isset($_GET["page"]) ? "yes": "no";

// ? defination to if and : defination to else