<?php

$bytes = 102400; // file size in bytes
$full_kilobytes = floor($bytes / 1024); // number of full kilobytes

// this function converts bytes to full kilobytes
function bytes_to_full_kilobytes($bytes)
{
  return floor($bytes / 1024);
}