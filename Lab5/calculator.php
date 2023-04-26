<?php
function Calculator($expression) {
    $dat = $expression;

    $dat_p = @explode('+', $dat);

    $dat_m = @explode('-', $dat);

    $dat_u = @explode('*', $dat);

    $dat_d = @explode('/', $dat);

    if($dat_p[1]){ $rezult_2 = 'Результат сложения :<br>'. ($dat_p[0] + $dat_p[1]); }

    if($dat_m[1]){ $rezult_2 = 'Результат минусования :<br>'.($dat_m[0] - $dat_m[1]); }

    if($dat_u[1]){ $rezult_2 = 'Результат умножения :<br>'.$dat_u[0] * $dat_u[1]; }

    if($dat_d[1]){if(trim($dat_d[1]) == '0'){$rezult_2 ='Делить на ноль нельзя';}

    else { $rezult_2 = 'Результат деления:<br>'. $dat_d[0] / $dat_d[1];}}
}
