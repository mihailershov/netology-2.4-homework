<?php
require_once 'core.php';
if (!isAuthorized() && !isQuest()) {
    location('admin.php');
}
logout();