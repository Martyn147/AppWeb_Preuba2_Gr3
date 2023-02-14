<?php
function navActive($valor){
    return request()->routeIs($valor) ? 'active':'';
}