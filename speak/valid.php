<?php
session_start();
if (unset($_SESSION['user'])) { header("Location: login/"); }
