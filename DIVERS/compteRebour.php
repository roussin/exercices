<?php

$texte = "Huic Arabia est conserta, ex alio latere Nabataeis contigua; opima varietate conmerciorum castrisque oppleta validis et castellis, quae ad repellendos gentium vicinarum excursus sollicitudo pervigil veterum per oportunos saltus erexit et cautos. haec quoque civitates habet inter oppida quaedam ingentes Bostram et Gerasam atque Philadelphiam murorum firmitate cautissimas. hanc provinciae inposito nomine rectoreque adtributo obtemperare legibus nostris Traianus conpulit imperator incolarum tumore saepe contunso cum glorioso marte Mediam urgeret et Parthos.
Cum autem commodis intervallata temporibus convivia longa et noxia coeperint apparari vel distributio sollemnium sportularum, anxia deliberatione tractatur an exceptis his quibus vicissitudo debetur, peregrinum invitari conveniet, et si digesto plene consilio id placuerit fieri, is adhibetur qui pro domibus excubat aurigarum aut artem tesserariam profitetur aut secretiora quaedam se nosse confingit.
Hanc regionem praestitutis celebritati diebus invadere parans dux ante edictus per solitudines Aboraeque amnis herbidas ripas, suorum indicio proditus, qui admissi flagitii metu exagitati ad praesidia descivere Romana. absque ullo egressus effectu deinde tabescebat immobilis.
";

$tabText = explode(" ",$texte);
$count = count($tabText);

//echo $count;
$rand = mt_rand(300000000,1000000000);
//print_r($tabText);
for ($i = 0  ; $i < $count ; $i++) {

    echo $tabText[$i] . " ";
    if ($i === 10) {
        echo $tabText[$i] . "\r\n";
    } else {
        echo $tabText[$i];
    }

    time_nanosleep(0,$rand);
    
}


for ($i = 10 ; $i > 0 ; $i--) {

    echo $i . "\r\n";
    sleep(1);  
} 

echo "C'est la guerre !!!!!";
