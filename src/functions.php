<?php

namespace ZonuProject;

/**
 * htmlspecialchars() の短縮記法
 *
 * @param string $input
 */
function h($input)
{
    return \htmlspecialchars($input, \ENT_QUOTES);
}
