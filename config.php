<?php

$conn = mysqli_connect("localhost", "root", "", "user");

if (!$conn) {
    echo "Connection Failed";
}