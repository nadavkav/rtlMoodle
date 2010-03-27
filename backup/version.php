<?php  //$Id: version.php,v 1.114.2.7 2009/10/06 01:31:56 stronk7 Exp $

/// This file defines the current version of the
/// backup/restore code that is being used.  This can be
/// compared against the values stored in the 
/// database (backup_version) to determine whether upgrades should
/// be performed (see db/backup_*.php)

    $backup_version = 2009100600;   // The current version is a date (YYYYMMDDXX)
    $backup_release = '1.9.6';     // User-friendly version number

?>
