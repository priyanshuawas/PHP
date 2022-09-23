<?php
//Write a PHP script to split the following string.
//Sample string :82307
//Expected Output : 8:23:07
echo substr(chunk_split('081207',2,':'),0 ,-1);
