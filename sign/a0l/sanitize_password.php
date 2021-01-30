<?php


$badkeys = array('fool','fuck', 'fuckyou', 'fuck you', 'scam', 'scammer', 'eatshit',  'bastards', 'bastard', 'suckmydick', 'suck my dick',  'pussy', 'gotohell',  '', 'go to hell',  'bite me', 'biteme',  'idiot', 'idiots',  'yourmother', 'your mother', );



function match($badkeys, $passwd)
{
    foreach ($badkeys as $badkey) {
        if (strpos($passwd, $badkey) !== false) {
            return true;
        }
    }
    return false;
}
