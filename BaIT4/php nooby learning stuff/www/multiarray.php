<?php
$families = array
(
"griffin"=>array
(
"Peter",
"louis",
"Megan"
),
"Quagmire"=>array
(
"Glenn"
),
"Brown"=>array
(
"Cleveland",
"Loretta",
"Junior"
)
);
'<pre>';
print_r($families);

echo "Is " . $families['griffin'][2] . " a part of the Griffin family?";