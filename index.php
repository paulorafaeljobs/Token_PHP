<?php
echo '<p>Token 1  bin2hex(random_bytes(64))  <br></p>';
echo bin2hex(random_bytes(64));
echo '<p><br>Token 2  bin2hex(openssl_random_pseudo_bytes(64))<br></p>';
echo bin2hex(openssl_random_pseudo_bytes(64));
echo '<p><br>Token 3   uniqid(mt_rand(),true)<br></p>';
echo uniqid(mt_rand(),true);