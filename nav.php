<?php
$OUTPUT->bodyStart();
$R = $CFG->apphome . '/';
$T = $CFG->wwwroot . '/';
$adminmenu = isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true";
$set = new \Tsugi\UI\MenuSet();
$set->setHome($CFG->servicename, $CFG->apphome);

if ( isset($CFG->lessons) ) {
    $set->addLeft('Lecciones', $R.'lessons');
}
if ( isset($_SESSION['id']) ) {
    $set->addLeft('Asignaciones', $R.'assignments');
} else {
    $set->addLeft('Asignaciones', $R.'assn');
}

if ( isset($_SESSION['id']) ) {
    $submenu = new \Tsugi\UI\Menu();
    $submenu->addLink('Perfil', $R.'profile');
    if ( isset($CFG->google_map_api_key) ) {
        $submenu->addLink('Mapa', $R.'map');
    }
    if ( isset($CFG->badge_path)  ) {
        $submenu->addLink('Insignias', $R.'badges');
    }
    if ( file_exists('materials.php') ) {
        $submenu->addLink('Materiales', $R.'materials');
    }
    if ( file_exists('privacy.php') ) {
        $submenu->addLink('Intimidad', $R.'privacy');
    }
    if ( $CFG->providekeys ) {
        $submenu->addLink('LMS Integración', $T . 'settings');
    }
    if ( isset($CFG->google_classroom_secret) ) {
        $submenu->addLink('Google Classroom', $T.'gclass/login');
    }
    $submenu->addLink('App Store gratis', 'https://www.tsugicloud.org');
    if ( $CFG->DEVELOPER ) {
        $submenu->addLink('Test LTI Tools', $T . 'dev');
    }
    $submenu->addLink('Test Tools', $T.'store');
    if ( isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true" ) {
        $submenu->addLink('Administer', $T . 'admin/');
    }
    $submenu->addLink('Cerrar sesión', $R.'logout');
    if ( isset($_SESSION['avatar']) ) {
        $set->addRight('<img src="'.$_SESSION['avatar'].'" style="height: 2em;"/>', $submenu);
        // htmlentities($_SESSION['displayname']), $submenu);
    } else {
        $set->addRight(htmlentities($_SESSION['displayname']), $submenu);
    }
} else {
    $set->addRight('Iniciar sesión', $T.'login.php');
}
$set->addRight('Instructor', 'http://www.dr-chuck.com');


// Set the topNav for the session
$OUTPUT->topNavSession($set);

$OUTPUT->topNav();
$OUTPUT->flashMessages();
