<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String country trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringCountryTrait {

    /**
     * Country.
     *
     * @var string|null
     */
    protected $country;

    /**
     * Get the country.
     *
     * @return string|null Returns the country.
     */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Set the country.
     *
     * @param string|null $country The country.
     */
    public function setCountry(?string $country) {
        $this->country = $country;
        return $this;
    }
}
