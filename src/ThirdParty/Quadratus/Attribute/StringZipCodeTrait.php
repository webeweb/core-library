<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Zip code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZipCodeTrait {

    /**
     * Zip code.
     *
     * @var string
     */
    private $zipCode;

    /**
     * Get the zip code.
     *
     * @return string Returns the zip code.
     */
    public function getZipCode() {
        return $this->zipCode;
    }

    /**
     * Set the zip code.
     *
     * @param string $zipCode The zip code.
     */
    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
        return $this;
    }
}
