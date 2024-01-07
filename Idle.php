<?php
print("Voer de leeftijd van Anna in:\n");
$anna = trim(fgets(STDIN));

print("Voer de leeftijd van Bob in:\n");
$bob = trim(fgets(STDIN));

if ($anna > $bob) {
    print ("Anna is ouder dan Bob");
} else {
    if ($bob > $anna) {
        print ("bob is ouder dan anna");
    } else {
        print ("evenoud");
    }
}
?>

