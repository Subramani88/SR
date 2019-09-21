<?php
function theDeviceIs() {
    $detect = new Mobile_Detect;
    if ($detect->isTablet()) {
        return "tablet";
    } else if ($detect->isMobile()) {
        return "mobile";
    } 
}