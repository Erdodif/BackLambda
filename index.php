<?php
$fv = function(){
    echo "f u";
};
$fv();
$ennelNagyobb = 0;
$t = [0,1,2,233,10,3,9,7,4,1000,-7,66,-5,-8];
echo var_dump(array_filter($t,function($a) use($ennelNagyobb){
    return $a<$ennelNagyobb;
}));
echo var_dump(array_filter($t,function($a){
    return $a%2==0;
}));
echo var_dump(array_map(function($a){
    $ki = "positive";
    if ($a < 0){
        $ki = "negative";
    }
    return $ki." crab: ".$a;
},$t));
usort($t,function($a,$b){
    $tempa = clone $a;
    explode(" ",$tempa)[2];
    $tempb = clone $b;
    explode(" ",$tempb)[2];
    return $tempa-$tempb;
});
echo var_dump($t);