
<?php 
    $norm1 = $_POST['norm1'];
    $naam = $_POST['naam'];
    $fouten = $_POST['fouten'];
    $lowercasenaam = strtolower($naam);
    $naamucfirst = ucfirst($lowercasenaam);
    $norm = $fouten / $norm1;
    $cijfer = 10 - $norm;
    $cijfer = round($cijfer, 1);
    
    if ($cijfer < 0 ){$cijfer = 0;}
    if ($naam)
    {
        if (!$fouten == "")
        {
            if (strlen($fouten)<3)
            {
                if (preg_match('/^[0-9]*$/', $fouten)) 
                {
                    if ($norm1){
                        
                        echo "Jouw naam is: ". $naamucfirst. "<br>";
                        echo "Jij hebt ". $fouten. " fouten"."<br>";
                        echo "Norm: " . $norm1."<br>";
                        echo "Dus jou cijfer is: ".$cijfer. "<br>";
                    }else{echo "Je moet de norm invoeren!";}
                } 
                else {echo "fouten mogen alleen cijfers bevatten !";}
            } 
            else {echo "Getal mag meer dan 2 cijfers bevatten !"."<br>";}   
        }
        else {echo "Vul je aantal fouten in!"."<br>";}
    }
    else {echo "Vul je naam in!"."<br>";}
?>
<a href="1a.php">Terug naar het formulier</a>