<?php
// (A) HOST
define("SITE_NAME", "Student_Attendance_Management_System");
define("HOST_BASE", "http://localhost/Attendance-System-main/"); 
define("HOST_NAME", parse_url(HOST_BASE, PHP_URL_HOST));
define("HOST_BASE_PATH", parse_url(HOST_BASE, PHP_URL_PATH));
define("HOST_ASSETS", HOST_BASE . "assets/");


// (B) API ENDPOINT
define("HOST_API", "api/");
define("HOST_API_BASE", HOST_BASE . HOST_API);
define("API_HTTPS", false); 
define("API_CORS", false); 


// (C) DATABASE
define("DB_HOST", "localhost"); 
define("DB_NAME", "sqlattendance"); 
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root"); 
define("DB_PASSWORD", ""); 

// (D) AUTOMATIC SYSTEM PATH
define("PATH_LIB", __DIR__ . DIRECTORY_SEPARATOR);
define("PATH_BASE", dirname(PATH_LIB) . DIRECTORY_SEPARATOR);
define("PATH_ASSETS", PATH_BASE . "assets" . DIRECTORY_SEPARATOR);
define("PATH_PAGES", PATH_BASE . "pages" . DIRECTORY_SEPARATOR);

// (E) JSON WEB TOKEN
define("JWT_ALGO", "HS256");
define("JWT_EXPIRE", 0);
define("JWT_ISSUER", "localhost"); 
define("JWT_SECRET", "sDoA2xoU-rdqdQebba3AtcQ3Pp=PQeSogqrgkQyMdE-HBT.B"); 

// (F) ERROR HANDLING
/* (F1) RECOMMENDED FOR LIVE SERVER
error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "PATH/error.log");
define("ERR_SHOW", false); */

// (F2) RECOMMENDED FOR DEVELOPMENT SERVER
error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", 1);
ini_set("log_errors", 0);
define("ERR_SHOW", true);

// (G) TIMEZONE
// https://www.php.net/manual/en/timezones.php
define("SYS_TZ", "UTC"); 
define("SYS_TZ_OFFSET", "+00:00"); 
date_default_timezone_set(SYS_TZ);

// (H) USER LEVELS
define("USR_LVL", [
  "A" => "Admin", "T" => "Teacher", "U" => "Student", "S" => "Suspended"
]);