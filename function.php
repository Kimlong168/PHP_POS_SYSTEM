<?php

//add active class to nav item
function urlIs($uri,$uri2){
    echo $uri === $uri2 ?  "active" : " ";
}
