<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ' . BASE_URL);
    exit();
}
