# passport-automation-system
Passport Automation System is an interface between the applicant and the authority responsible. It helps to register for passports and verify the applications. The applicant can register and view the current status of the application, and the officials can validate the application using this system.

Versions
XAMPP  ---  5.6.40
MySQL  ---  5.7.40

Port mysql -- 8111

Edits
  in config.inc.php 
    $cfg['Servers'][$i]['port'] = '8111';
  in my.ini
    port = 8111
