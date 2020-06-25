<?php

function papan_catur($angka)
{
    for ($i = 0; $i <= $angka; $i++) {
        for ($j = 1; $j <= $angka; $j++) {
            echo "# ";
        }
        echo "<br>";
    }
}



// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

// echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

// echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/