<?php
    function modalOptions($option) {
        switch ($option)
        {
            case 0:
                $subscription = [
                "title" => "Basic",
                "Price" => "4.00",
                "Quality" => "Good",
                "Resolution" => "1080p",
                "Users" => "1"
                ];
                break;
                case 1:
                $subscription = [
                "title" => "Premium",
                "Price" => "5.00",
                "Quality" => "Better",
                "Resolution" => "4K",
                "Users" => "2"
                ];
                break;
                case 2:
                $subscription = [
                "title" => "Pro",
                "Price" => "6.00",
                "Quality" => "Best",
                "Resolution" => "8K HDR",
                "Users" => "5"
                ];
                break;
        }
        return $subscription; 
    }

    function getAll() {
        $options = array(
            array(
            "title" => "Basic",
            "Price" => "4.00",
            "Quality" => "Good",
            "Resolution" => "1080p",
            "Users" => "1"
            ),
            array(
                "title" => "Premium",
                "Price" => "5.00",
                "Quality" => "Better",
                "Resolution" => "4K",
                "Users" => "2"
            ),
            array(
            "title" => "Pro",
            "Price" => "6.00",
            "Quality" => "Best",
            "Resolution" => "8K HDR",
            "Users" => "5"
            )
            );

        return $options;
    }
?>