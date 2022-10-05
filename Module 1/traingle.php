<?php
//$num=0;
echo "<table style=' border-collapse: collapse'>";
for ($i=0;$i<10;$i++){
    echo "<tr>";
    for($k=0; $k <$i ; $k++){
        echo " <td style='border: 2px dashed mediumaquamarine'>$i</td>";
    }echo '</tr>';
}echo '</table>'
?>