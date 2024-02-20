<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\Offer;

enum OfferType: string
{
    case LIMITED = 'limited';
    case UNLIMITED = 'unlimited';
}