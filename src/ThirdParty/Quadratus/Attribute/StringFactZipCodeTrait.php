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
 * Fact zip code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactZipCodeTrait {

    /**
     * Fact zip code.
     *
     * @var string
     */
    private $factZipCode;

    /**
     * Get the fact zip code.
     *
     * @return string Returns the fact zip code.
     */
    public function getFactZipCode() {
        return $this->factZipCode;
    }

    /**
     * Set the fact zip code.
     *
     * @param string $factZipCode The fact zip code.
     */
    public function setFactZipCode($factZipCode) {
        $this->factZipCode = $factZipCode;
        return $this;
    }
}
