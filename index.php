<?php
function generateStory($singular_noun, $verb, $color, $distance_unit){
  $replace_from = array("wood", "sleep", "dark", "miles"); 
  $replace_to = array($singular_noun, $verb, $color, $distance_unit);

  $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\nBut I have promises to keep,\nAnd ${distance_unit} to go before I ${verb},\nAnd ${distance_unit} to go before I ${verb}.\n";
$story_result = str_replace($replace_from, $replace_to, $story);
return $story_result;
}

echo generateStory("dog", "eat", "purple", "miles");
echo generateStory("car", "cook", "vermilion", "miles");
echo generateStory("empty void", "speak", "beige", "miles");
echo generateStory("bird", "fly", "colorfull", "miles");
