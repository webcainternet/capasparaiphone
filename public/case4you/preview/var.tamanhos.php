
<?php
$mh2=0;
$mw2=0;
$mh15a=0;
$mw15a=0;
$mh15b=0;
$mw15b=0;

$qm=$_GET["m"];
$ql=$_GET["l"];

switch ($qm) {
    //IPHONE4 IPHONE4S
    case 0:
        $mimage = "mask-iphone4.png";
        $mw = "340";
        $mh = "490";
        break;

    //IPHONE5
    case 1:
        $mimage = "mask-iphone5.png";
        $mw = "340";
        $mh = "538";
        break;

    //GALAXYS3
    case 2:
        $mimage = "mask-galaxy3.png";
        $mw = "340";
        $mh = "527";
        break;

    //GALAXYS4
    case 3:
        $mimage = "mask-galaxy4.png";
        $mw = "340";
        $mh = "499";
        break;

    //GALAXYS2
    case 4:
        $mimage = "mask-galaxys2.png";
        $mw = "340";
        $mh = "560";
        break;

    //GALAXY NOTE 2
    case 5:
        $mimage = "mask-galaxyn2.png";
        $mw = "340";
        $mh = "561";
        break;
}

$mw = $mw*2;
$mh = $mh*2;

switch ($ql) {
    //Layout 2 fotos
    case 1:
			switch ($qm) {
			    //IPHONE4 IPHONE4S
			    case 0:
			        $mw2 = "338";
			        $mh2 = "243";
			        break;

			    //IPHONE5
			    case 1:
			        $mw2 = "338";
			        $mh2 = "267";
			        break;

			    //GALAXYS3
			    case 2:
			        $mw2 = "338";
			        $mh2 = "261";
			        break;

			    //GALAXYS4
			    case 3:
			        $mw2 = "338";
			        $mh2 = "247";
			        break;

                //GALAXYS2
                case 4:
                    $mw2 = "338";
                    $mh2 = "278";
                    break;

                //GALAXY NOTE 2
                case 5:
                    $mw2 = "338";
                    $mh2 = "278";
                    break;
			}
        break;

    //Layout 15 fotos
    case 2:
                        switch ($qm) {
                            //IPHONE4 IPHONE4S
                            case 0:
                                $mw15a = "168";
                                $mh15a = "161";
                                $mw15b = "83";
                                $mh15b = "79";
                                break;

                            //IPHONE5
                            case 1:
                                $mw15a = "168";
                                $mh15a = "177";
                                $mw15b = "83";
                                $mh15b = "87";
                                break;

                            //GALAXYS3
                            case 2:
                                $mw15a = "168";
                                $mh15a = "173";
                                $mw15b = "83";
                                $mh15b = "85";
                                break;

                            //GALAXYS4
                            case 3:
                                $mw15a = "168";
                                $mh15a = "164";
                                $mw15b = "83";
                                $mh15b = "81";
                                break;

                            //GALAXYS2
                            case 4:
                                $mw15a = "168";
                                $mh15a = "184";
                                $mw15b = "83";
                                $mh15b = "91";
                                break;

                            //GALAXY NOTE 2
                            case 5:
                                $mw15a = "168";
                                $mh15a = "184";
                                $mw15b = "83";
                                $mh15b = "91";
                                break;
			}
        break;
    }

    $mw2 = $mw2*2;
    $mh2 = $mh2*2;


    if ($ql == 2 && $qm == 0) {
        $mw15a = $mw15a*2;
        $mh15a = $mh15a*2;
        $mw15b = $mw15b*2;
        $mh15b = ($mh15b*2)+3;
    }

    if ($ql == 2 && $qm == 1) {
        $mw15a = $mw15a*2;
        $mh15a = ($mh15a*2)-6;
        $mw15b = $mw15b*2;
        $mh15b = $mh15b*2;
    }

    if ($ql == 2 && $qm == 2) {
        $mw15a = $mw15a*2;
        $mh15a = ($mh15a*2)-6;
        $mw15b = $mw15b*2;
        $mh15b = $mh15b*2;
    }

    if ($ql == 2 && $qm == 3) {
        $mw15a = $mw15a*2;
        $mh15a = ($mh15a*2)-4;
        $mw15b = $mw15b*2;
        $mh15b = $mh15b*2;
    }

    if ($ql == 2 && $qm == 4) {
        $mw15a = $mw15a*2;
        $mh15a = ($mh15a*2)-4;
        $mw15b = $mw15b*2;
        $mh15b = $mh15b*2;
    }

    if ($ql == 2 && $qm == 5) {
        $mw15a = $mw15a*2;
        $mh15a = ($mh15a*2)-4;
        $mw15b = $mw15b*2;
        $mh15b = $mh15b*2;
    }

?>