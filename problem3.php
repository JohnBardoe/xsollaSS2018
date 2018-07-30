<?php
fputs(STDOUT,
    max(array_count_values(explode(' ',
        fgets(STDIN)))));
