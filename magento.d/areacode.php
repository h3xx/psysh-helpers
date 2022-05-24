<?php

function areacode(string $areaCode = null) {
    if (is_null($areaCode)) {
        return getAreacode();
    } else {
        setAreaCode($areaCode);
    }
}

function setAreacode(string $areaCode): void {
    state()->setAreaCode($areaCode);
}

function getAreacode() {
    state()->getAreaCode();
}
