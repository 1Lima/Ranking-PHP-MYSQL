<?php

function colorRank($position){
    switch($position){
        case 1: 
            $color = "#ffd700"; //#ffd700;
            break;
        case 2:
            $color = "#c0c0c0"; //#c0c0c0;
            break;
        case 3:
            $color = "#cd7f32"; //#cd7f32;
            break;
    }

    return $color;
}

function levelRank($points){
    if($points <= 83){
        $rank = 'Level 1';
    }elseif($points >= 83 && $points <= 174){
        $rank = 'Level 2';
    }elseif($points >= 174 && $points <= 276){
        $rank = 'Level 3';
    }elseif($points >= 276 && $points <= 388){
        $rank = 'Level 4';
    }elseif($points >= 388 && $points <= 512){
        $rank = 'Level 5';
    }elseif($points >= 512 && $points <= 650){
        $rank = 'Level 6';
    }elseif($points >= 650 && $points <= 801){
        $rank = 'Level 7';
    }elseif($points >= 801 && $points <= 969){
        $rank = 'Level 8';
    }elseif($points >= 969 && $points <= 1154){
        $rank = 'Level 9';
    }elseif($points >= 1154 && $points <= 1358){
        $rank = 'Level 10';
    }elseif($points >= 1358 && $points <= 1584){
        $rank = 'Level 11';
    }elseif($points >= 1584 && $points <= 1833){
        $rank = 'Level 12';
    }elseif($points >= 1833 && $points <= 2107){
        $rank = 'Level 13';
    }elseif($points >= 2107 && $points <= 2411){
        $rank = 'Level 14';
    }elseif($points >= 2411 && $points <= 2746){
        $rank = 'Level 15';
    }elseif($points >= 2746 && $points <= 3115){
        $rank = 'Level 16';
    }elseif($points >= 3115 && $points <= 3523){
        $rank = 'Level 17';
    }elseif($points >= 3523 && $points <= 3973){
        $rank = 'Level 18';
    }elseif($points >= 3973 && $points <= 4470){
        $rank = 'Level 19';
    }elseif($points >= 4470 && $points <= 5018){
        $rank = 'Level 20';
    }elseif($points >= 5018 && $points <= 5624){
        $rank = 'Level 21';
    }elseif($points >= 5624 && $points <= 6291){
        $rank = 'Level 22';
    }elseif($points >= 6291 && $points <= 7028){
        $rank = 'Level 23';
    }elseif($points >= 7028 && $points <= 7842){
        $rank = 'Level 24';
    }elseif($points >= 7842 && $points <= 8740){
        $rank = 'Level 25';
    }elseif($points >= 8740 && $points <= 9730){
        $rank = 'Level 26';
    }elseif($points >= 9730 && $points <= 10824){
        $rank = 'Level 27';
    }elseif($points >= 10824 && $points <= 12031){
        $rank = 'Level 28';
    }elseif($points >= 12031 && $points <= 13363){
        $rank = 'Level 29';
    }elseif($points >= 13363 && $points <= 14833){
        $rank = 'Level 30';
    }elseif($points >= 14833 && $points <= 16456){
        $rank = 'Level 31';
    }elseif($points >= 16456 && $points <= 18247){
        $rank = 'Level 32';
    }elseif($points >= 18247 && $points <= 20224){
        $rank = 'Level 33';
    }elseif($points >= 20224 && $points <= 22406){
        $rank = 'Level 34';
    }elseif($points >= 22406 && $points <= 24815){
        $rank = 'Level 35';
    }elseif($points >= 24815 && $points <= 27473){
        $rank = 'Level 36';
    }elseif($points >= 27473 && $points <= 30408){
        $rank = 'Level 37';
    }elseif($points >= 30408 && $points <= 33648){
        $rank = 'Level 38';
    }elseif($points >= 33648 && $points <= 37224){
        $rank = 'Level 39';
    }elseif($points >= 37224 && $points <= 41171){
        $rank = 'Level 40';
    }elseif($points >= 41171 && $points <= 45529){
        $rank = 'Level 41';
    }elseif($points >= 45529 && $points <= 50339){
        $rank = 'Level 42';
    }elseif($points >= 50339 && $points <= 55649){
        $rank = 'Level 43';
    }elseif($points >= 55649 && $points <= 61512){
        $rank = 'Level 44';
    }elseif($points >= 61512 && $points <= 67983){
        $rank = 'Level 45';
    }elseif($points >= 67983 && $points <= 75127){
        $rank = 'Level 46';
    }elseif($points >= 75127 && $points <= 83014){
        $rank = 'Level 47';
    }elseif($points >= 83014 && $points <= 91721){
        $rank = 'Level 48';
    }elseif($points >= 91721 && $points <= 101333){
        $rank = 'Level 49';
    }elseif($points >= 101333 && $points <= 111945){
        $rank = 'Level 50';
    }elseif($points >= 111945 && $points <= 123660){
        $rank = 'Level 51';
    }elseif($points >= 123660 && $points <= 136594){
        $rank = 'Level 52';
    }elseif($points >= 136594 && $points <= 150872){
        $rank = 'Level 53';
    }elseif($points >= 150872 && $points <= 166636){
        $rank = 'Level 54';
    }elseif($points >= 166636 && $points <= 184040){
        $rank = 'Level 55';
    }elseif($points >= 184040 && $points <= 203254){
        $rank = 'Level 56';
    }elseif($points >= 203254 && $points <= 224466){
        $rank = 'Level 57';
    }elseif($points >= 224466 && $points <= 247886){
        $rank = 'Level 58';
    }elseif($points >= 247886 && $points <= 273742){
        $rank = 'Level 59';
    }elseif($points >= 273742 && $points <= 302288){
        $rank = 'Level 60';
    }elseif($points >= 302288 && $points <= 333804){
        $rank = 'Level 61';
    }elseif($points >= 333804 && $points <= 368599){
        $rank = 'Level 62';
    }elseif($points >= 368599 && $points <= 407015){
        $rank = 'Level 63';
    }elseif($points >= 407015 && $points <= 449428){
        $rank = 'Level 64';
    }elseif($points >= 449428 && $points <= 496254){
        $rank = 'Level 65';
    }elseif($points >= 496254 && $points <= 547953){
        $rank = 'Level 66';
    }elseif($points >= 547953 && $points <= 605032){
        $rank = 'Level 67';
    }elseif($points >= 605032 && $points <= 668051){
        $rank = 'Level 68';
    }elseif($points >= 668051 && $points <= 737627){
        $rank = 'Level 69';
    }elseif($points >= 737627 && $points <= 814445){
        $rank = 'Level 70';
    }elseif($points >= 814445 && $points <= 899257){
        $rank = 'Level 71';
    }elseif($points >= 899257 && $points <= 992895){
        $rank = 'Level 72';
    }elseif($points >= 992895 && $points <= 1096278){
        $rank = 'Level 73';
    }elseif($points >= 1096278 && $points <= 1210421){
        $rank = 'Level 74';
    }elseif($points >= 1210421 && $points <= 1336443){
        $rank = 'Level 75';
    }elseif($points >= 1336443 && $points <= 1475581){
        $rank = 'Level 76';
    }elseif($points >= 1475581 && $points <= 1629200){
        $rank = 'Level 77';
    }elseif($points >= 1629200 && $points <= 1798808){
        $rank = 'Level 78';
    }elseif($points >= 1798808 && $points <= 1986068){
        $rank = 'Level 79';
    }elseif($points >= 1986068 && $points <= 2192818){
        $rank = 'Level 80';
    }elseif($points >= 2192818 && $points <= 2421087){
        $rank = 'Level 81';
    }elseif($points >= 2421087 && $points <= 2673114){
        $rank = 'Level 82';
    }elseif($points >= 2673114 && $points <= 2951373){
        $rank = 'Level 83';
    }elseif($points >= 2951373 && $points <= 3258594){
        $rank = 'Level 84';
    }elseif($points >= 3258594 && $points <= 3597792){
        $rank = 'Level 85';
    }elseif($points >= 3597792 && $points <= 3972294){
        $rank = 'Level 86';
    }elseif($points >= 3972294 && $points <= 4385776){
        $rank = 'Level 87';
    }elseif($points >= 4385776 && $points <= 4842295){
        $rank = 'Level 88';
    }elseif($points >= 4842295 && $points <= 5346332){
        $rank = 'Level 89';
    }elseif($points >= 5346332 && $points <= 5902831){
        $rank = 'Level 90';
    }elseif($points >= 5902831 && $points <= 6517253){
        $rank = 'Level 91';
    }elseif($points >= 6517253 && $points <= 7195629){
        $rank = 'Level 92';
    }elseif($points >= 7195629 && $points <= 7944614){
        $rank = 'Level 93';
    }elseif($points >= 7944614 && $points <= 8771558){
        $rank = 'Level 94';
    }elseif($points >= 8771558 && $points <= 9684577){
        $rank = 'Level 95';
    }elseif($points >= 9684577 && $points <= 10692629){
        $rank = 'Level 96';
    }elseif($points >= 10692629 && $points <= 11805606){
        $rank = 'Level 97';
    }elseif($points >= 11805606 && $points <= 13034431){
        $rank = 'Level 98';
    }elseif($points >= 13034431 && $points <= 14391160){
        $rank = 'Level 99';
    }elseif($points >= 14391160){
        $rank = 'Level 100';
    }

    return $rank;
}