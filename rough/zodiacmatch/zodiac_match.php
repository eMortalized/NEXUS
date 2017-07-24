<?php

//astromatch("Taurus","Taurus");

function astromatch($a,$b)
{
    $cross="Favourable";
    $dash="Less Favourable";
    $bigo="Critical";
    
    $astromatcharray = array
    (
        array("","Aries","Taurus","Gemini"),
        array("Aries",$cross,$dash,$cross),
        array("Taurus",$dash,$cross,$dash),
        array("Gemini",$cross,$dash,$cross),
        array("Cancer",$bigo,$cross,$dash),
        array("Leo",$cross,$bigo,$cross),
        array("Virgo",$dash,$cross,$bigo),
        array("Libra",$cross,$dash,$cross),
        array("Scropio",$dash,$cross,$dash),
        array("Sagittarius",$cross,$dash,$cross),
        array("Capricon",$bigo,$cross,$bigo),
        array("Acquarius",$cross,$bigo,$cross),
        array("Sagittarius",$dash,$cross,$bigo),
  );

    
    for($i=1;$i<=3;$i++)
    {
        
        if($astromatcharray[0][$i]==$a)
        {
            break;
        }
    }
    
    echo "$a will have:<br><br><br>";
    for($j=1;$j<=12;$j++)
    {
            
            if($astromatcharray[$j][0]==$b)
            {
                echo "---------------------------------------------------<br>";
                echo "with ",$b," will be ",$astromatcharray[$j][$i],"<br>";
                echo "---------------------------------------------------<br>";
            }
            else
            {
                //echo "with ",$astromatcharray[$j][0]," will be ",$astromatcharray[$j][$i],"<br>";
                
            }
            
    }
}
?>

