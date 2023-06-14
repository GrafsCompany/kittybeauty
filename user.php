<?php
session_start();
if (isset($_SESSION['user'])) {
    echo("Ви увійшли яак " . $_SESSION['user']['nick']);
} else {
    echo("Ви не авторизовані.");
}
