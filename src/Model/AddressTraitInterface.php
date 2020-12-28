<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model;

/**
 * Address trait interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model
 */
interface AddressTraitInterface {

    /**
     * Get the addressee.
     *
     * @return string|null Returns the addressee.
     */
    public function getAddressee(): ?string;

    /**
     * Get the country.
     *
     * @return string|null Returns the country.
     */
    public function getCountry(): ?string;

    /**
     * Get the house number.
     *
     * @return string|null Returns the house number.
     */
    public function getHouseNumber(): ?string;

    /**
     * Get the location.
     *
     * @return string|null Returns the location.
     */
    public function getLocation(): ?string;

    /**
     * Get the postal code.
     *
     * @return string|null Returns the postal code.
     */
    public function getPostalCode(): ?string;

    /**
     * Get the street name.
     *
     * @return string|null Returns the street name.
     */
    public function getStreetName(): ?string;

    /**
     * Set the addressee.
     *
     * @param string|null $addressee The addressee.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setAddressee(?string $addressee);

    /**
     * Set the country.
     *
     * @param string|null $country The country.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setCountry(?string $country);

    /**
     * Set the house number.
     *
     * @param string|null $houseNumber The house number.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setHouseNumber(?string $houseNumber);

    /**
     * Set the location.
     *
     * @param string|null $location The location.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setLocation(?string $location);

    /**
     * Set the postal code.
     *
     * @param string|null $postalCode The postal code.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setPostalCode(?string $postalCode);

    /**
     * Set the street name.
     *
     * @param string|null $streetName The street name.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setStreetName(?string $streetName);
}
