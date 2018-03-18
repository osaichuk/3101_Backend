<?php

function listDirectory ($folder)
{
    return implode('<br>', scandir($folder));

}

echo listDirectory('../arrays_loops_tasks');