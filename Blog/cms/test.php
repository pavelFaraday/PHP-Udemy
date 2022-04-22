<?php
// Password, algorith, array of options
echo password_hash('secret', PASSWORD_BCRYPT, array('cost' => 10));
