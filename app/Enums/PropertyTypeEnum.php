<?php

namespace App\Enums;

enum PropertyTypeEnum : string {
    case SINGLE = 'Single-family home';
    case TOWNHOUSE = 'Townhouse';
    case MULTIFAMILY = 'Multi-family home';
    case BUNGALOW = 'Bungalow';
}