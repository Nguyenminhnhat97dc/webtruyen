<?php
// format MySQL DATETIME value into a more readable string
function formatDate($val)
{
return date("d/m/Y", strtotime($val));
}
?>