<?php

$connect = mysqli_connect('localhost', 'cms', '30072003', 'cms');

if (mysqli_connect_errno()) {
    exit ('Falha ao se conectar com o MySQL: ' . mysqli_connect_error());
};

?>