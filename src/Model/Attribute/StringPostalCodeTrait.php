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
 * String postal code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringPostalCodeTrait {

    /**
     * Postal code.
     *
     * @var string
     */
    protected $postalCode;

    /**
     * Get the postal code.
     *
     * @return string Returns the postal code.
     */
    public function getPostalCode() {
        return $this->postalCode;
    }

    /**
     * Set the postal code.
     *
     * @param string $postalCode The postal code.
     */
    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
        return $this;
    }
}
