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
 * String street name trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringStreetNameTrait {

    /**
     * Street name.
     *
     * @var string
     */
    protected $streetName;

    /**
     * Get the street name.
     *
     * @return string Returns the street name.
     */
    public function getStreetName() {
        return $this->streetName;
    }

    /**
     * Set the street name.
     *
     * @param string $streetName The street name.
     */
    public function setStreetName($streetName) {
        $this->streetName = $streetName;
        return $this;
    }
}
