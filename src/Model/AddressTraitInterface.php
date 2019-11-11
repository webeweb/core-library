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
     * @return string Returns the addressee.
     */
    public function getAddressee();

    /**
     * Get the country.
     *
     * @return string Returns the country.
     */
    public function getCountry();

    /**
     * Get the house number.
     *
     * @return string Returns the house number.
     */
    public function getHouseNumber();

    /**
     * Get the location.
     *
     * @return string Returns the location.
     */
    public function getLocation();

    /**
     * Get the postal code.
     *
     * @return string Returns the postal code.
     */
    public function getPostalCode();

    /**
     * Get the street name.
     *
     * @return string Returns the street name.
     */
    public function getStreetName();

    /**
     * Set the addressee.
     *
     * @param string $addressee The addressee.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setAddressee($addressee);

    /**
     * Set the country.
     *
     * @param string $country The country.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setCountry($country);

    /**
     * Set the house number.
     *
     * @param string $houseNumber The house number.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setHouseNumber($houseNumber);

    /**
     * Set the location.
     *
     * @param string $location The location.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setLocation($location);

    /**
     * Set the postal code.
     *
     * @param string $postalCode The postal code.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setPostalCode($postalCode);

    /**
     * Set the street name.
     *
     * @param string $streetName The street name.
     * @return AddressTraitInterface Returns this address trait.
     */
    public function setStreetName($streetName);
}
