<?php
$per= 82;
if($per >80 && $per<= 100){
    echo " Marit";


}
elseif ($per>60 && $per<=79){
    echo "1st Division";

}
elseif ($per>45 && $per<59){
    echo "2nd Division";
}
elseif ($per>33 && $per<44){
    echo "3rd Division";
}
elseif ($per<33){
    echo "Fail";
}
else{
    echo " Please Provide correct percentage";
}
?>