<?php
function modaloptions($option){
    switch ($option)
    {
        case 0:
            $subscription = [
             "title" => "Basic",
             "Price" => "4.99",
             "Quality" => "Good",
             "Resolution" => "1080p",
             "Users" => "1"
            ];
            break;
            case 1:
            $subscription = [
             "title" => "Normal",
             "Price" => "9.99",
             "Quality" => "Better",
             "Resolution" => "4K",
             "Users" => "2"
            ];
            break;
            case 2:
            $subscription = [
             "title" => "Premium",
             "Price" => "14.99",
             "Quality" => "Best",
             "Resolution" => "8K HDR",
             "Users" => "5"
            ];
            break;
    }
    return $subscription; 
}
?>