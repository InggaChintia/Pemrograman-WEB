<?php
    //LANGKAH 2
    $pattern = '/[a-z]/'; 
    $text = 'This is a Sample Text.';
    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan!";
    } else  {
        echo "Tidak ada huruf kecil!";
    }

    //LANGKAH 6
    echo "<br>";
    $pattern = '/[0-9]+/'; 
    $text = 'There are 123 apples.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else  {
        echo "Tidak ada yang cocok!";
    }

    //LANGKAH 10
    echo "<br>";
    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; //Output : "I like banana pie."

    //LANGKAH 14
    echo "<br>";
    $pattern = '/go*d/'; //Cocokkan "god", "good", "goooood", dll.
    $text = 'god is good.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    }else {
        echo "Tidak ada yang cocok!";
    }

    //LANGKAH 17
    echo "<br>";
    $pattern = '/go?d/'; //Cocokkan "god", "good", "goooood", dll.
    $text = 'god is good.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    }else {
        echo "Tidak ada yang cocok!";
    }

    //LANGKAH 18
    echo "<br>";
    $pattern = '/go{2,3}d/'; //Cocokkan "god", "good", "goooood", dll.
    $text = 'god is good.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    }else {
        echo "Tidak ada yang cocok!";
    }
?>