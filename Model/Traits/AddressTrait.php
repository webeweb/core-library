<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Traits;

/**
 * Address trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Traits
 */
trait AddressTrait {

    /**
     * Address.
     *
     * @var string
     */
    private $address;

    /**
     * City.
     *
     * @var string
     */
    private $city;

    /**
     * Company.
     *
     * @var string
     */
    private $company;

    /**
     * Country.
     *
     * @var string
     */
    private $country;

    /**
     * Firstname.
     *
     * @var string
     */
    private $firstname;

    /**
     * Lastname.
     *
     * @var string
     */
    private $lastname;

    /**
     * Postal code.
     *
     * @var string
     */
    private $postalCode;

    /**
     * Get the address.
     *
     * @return string Returns the address.
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Get the city.
     *
     * @return string Retuns the city.
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Get the company.
     *
     * @return string Returns the company.
     */
    public function getCompany() {
        return $this->company;
    }

    /**
     * Get the country.
     *
     * @return string Returns the country.
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Get the firstname.
     *
     * @return string Returns the firstname.
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Get the lastname.
     *
     * @return string Returns the lastname.
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Get the postal code.
     *
     * @return string Returns the postal code.
     */
    public function getPostalCode() {
        return $this->postalCode;
    }

    /**
     * Set the address.
     *
     * @param string $address The address
     * @return mixed Returns the class using this trait.
     */
    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    /**
     * Set the city.
     *
     * @param string $city The city.
     * @return mixed Returns the class using this trait.
     */
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Set the company.
     *
     * @param string $company The company.
     * @return mixed Returns the class using this trait.
     */
    public function setCompany($company) {
        $this->company = $company;
        return $this;
    }

    /**
     * Set the country.
     *
     * @param string $country The country.
     * @return mixed Returns the class using this trait.
     */
    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Set the firstname.
     *
     * @param string $firstname The firstname.
     * @return mixed Returns the class using this trait.
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Set the lastname.
     *
     * @param string $lastname The lastname.
     * @return mixed Returns the class using this trait.
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Set the postal code.
     *
     * @param string $postalCode The postal code.
     * @return mixed Returns the class using this trait.
     */
    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
        return $this;
    }

}
