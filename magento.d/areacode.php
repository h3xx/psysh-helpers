<?php

function areacode(string $areaCode): void {
    state()->setAreaCode($areaCode);
}
