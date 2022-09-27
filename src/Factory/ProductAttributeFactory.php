<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusMultiVendorMarketplacePlugin\Factory;

use BitBag\SyliusMultiVendorMarketplacePlugin\Entity\ProductListing\DraftAttributeInterface;
use Sylius\Component\Product\Model\ProductAttribute;
use Sylius\Component\Product\Model\ProductAttributeInterface;

final class ProductAttributeFactory implements ProductAttributeFactoryInterface
{
    public function createClone(DraftAttributeInterface $draftAttribute): ProductAttributeInterface
    {
        $productAttribute = new ProductAttribute();
        $productAttribute->setTranslatable($draftAttribute->isTranslatable());
        $productAttribute->setStorageType($draftAttribute->getStorageType());
        $productAttribute->setConfiguration($draftAttribute->getConfiguration());
        $productAttribute->setCode($draftAttribute->getCode());
        $productAttribute->setType($draftAttribute->getType());
        $productAttribute->setPosition($draftAttribute->getPosition());

        return $productAttribute;
    }
}