<?php
//Adding Tasks
if(array_key_exists('Task', $_POST)) {
    button1();
}
else if(array_key_exists('button2', $_POST)) {
    button2();
}
function AddingTask() {

}
function button2() {
    echo "This is Button2 that is selected";
}
?>