<?php
    $name = "Teresa"; // Heading 1
    $city = "NYC";
    $movie = "Star Wars"; // Italics
    $friend = "George"; // Bold
    $candy = "Sour Patch Kids";

    // Story
    echo "<h1>" . $name . "</h1>
    <p> When I was visiting " . $city .", my friend 
    <b>" . $friend . "</b> and I went to the cinema to watch a movie.
    I didn't have an specific movie I wanted to
    see, so I let <b>" . $friend . "</b> choose.
    He chose <i>" . $movie . "</i>.
    Before the movie, I wanted to get some candy, but
    <b>" . $friend . "</b> told me he had a bag of " . $candy . " in
    his bag to avoid lines and save time.</p>";
?>