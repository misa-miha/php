<?php

function trianglearea($bottom, $height)
{
    return $bottom * $height / 2;
}

function squarearea($bottom, $height)
{
    return $bottom * $height;
}

function trapezoidarea($bottom, $top, $height)
{
    return ($bottom + $top) * $height / 2;
}

echo trianglearea(20, 10) . "\n";
echo squarearea(10, 10) . "\n";
echo trapezoidarea(20, 10, 10);