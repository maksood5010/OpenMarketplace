<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusMultiVendorMarketplacePlugin\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

class VendorImage implements VendorImageInterface, ResourceInterface
{
    protected ?int $id;

    protected ?\SplFileInfo $file;

    protected ?string $path;

    protected ?VendorInterface $owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFile(): ?\SplFileInfo
    {
        return $this->file;
    }

    public function setFile(?\SplFileInfo $file): void
    {
        $this->file = $file;
    }

    public function hasFile(): bool
    {
        return null !== $this->file;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): void
    {
        $this->path = $path;
    }

    public function getOwner(): ?VendorInterface
    {
        return $this->owner;
    }

    public function setOwner(VendorInterface $owner): void
    {
        $this->owner = $owner;
    }
}