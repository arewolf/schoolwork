<?php

ob_start();

echo "Special Buffer";




$output = ob_get_contents();
ob_end_clean();

echo "broswer's normal buffer";
echo $output;



