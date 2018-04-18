<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model;

/**
 * Address interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model
 */
interface AdressInterface {

    /**
     * Get the address.
     *
     * @return string Returns the address.
     */
    public function getAddress();

    /**
     * Get the city.
     *
     * @return string Retuns the city.
     */
    public function getCity();

    /**
     * Get the company.
     *
     * @return string Returns the company.
     */
    public function getCompany();

    /**
     * Get the country.
     *
     * @return string Returns the country.
     */
    public function getCountry();

    /**
     * Get the firstname.
     *
     * @return string Returns the firstname.
     */
    public function getFirstname();

    /**
     * Get the lastname.
     *
     * @return string Returns the lastname.
     */
    public function getLastname();

    /**
     * Get the postal code.
     *
     * @return string Returns the postal code.
     */
    public function getPostalCode();
}
