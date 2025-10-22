<?php
// Classes/Domain/Model/Immo.php
declare(strict_types=1);

namespace Mbx\DevquestSite\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

final class Immo extends AbstractEntity
{
    protected float $coldRent = 0.0;
    protected float $warmRent = 0.0;
    protected float $area = 0.0;
    protected int $rooms = 0;
    protected string $street = '';
    protected string $postalCode = '';
    protected string $city = '';

    public function getColdRent(): float
    {
        return $this->coldRent;
    }

    public function setColdRent(float $coldRent): void
    {
        $this->coldRent = $coldRent;
    }

    public function getWarmRent(): float
    {
        return $this->warmRent;
    }

    public function setWarmRent(float $warmRent): void
    {
        $this->warmRent = $warmRent;
    }

    public function getArea(): float
    {
        return $this->area;
    }

    public function setArea(float $area): void
    {
        $this->area = $area;
    }

    public function getRooms(): int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): void
    {
        $this->rooms = $rooms;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }
}
