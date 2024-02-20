<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\Offer;

final class Offer
{
    /**
     * @var OfferId
     */
    private $id;

    /**
     * @var OfferType
     */
    private $type;

    public function __construct(OfferId $id, OfferType $type)
    {
        $this->id   = $id;
        $this->type = $type;
    }
}