<?php

$jumbotrons_data = [
    [
        "image" => "books-3237878_1280.jpg",
        "title" => "Discover New Old Books !",
        "text" => "Meet people, talk albout what you like, exchange some books"
    ],
    [
        "image" => "books-1655783_1280.jpg",
        "title" => "Giveaway Operation",
        "text" => "So many books at your home, and so little place...
        Give it to your new friends and make them happy :)"
    ],
    [
        "image" => "book-2869_1280.jpg",
        "title" => "Travel in imagination...",
        "text" => "Since years, the authors made your travel different univers.
        Science-fiction, fantasy, story-life... Take the train of the reading and go for new adventure."
    ]
];

echo "<div class='jumbotron'>";
foreach($jumbotrons_data as $jumbotron){
    echo "<div class='item' style='background-image: url(\"/assets/img/".$jumbotron['image']."\")'>";   
        echo "<h3>". $jumbotron['title'] ."</h3>";
        echo "<p>". $jumbotron['text'] ."</p>";
    echo "</div>";  
}
echo "</div>";  
?>