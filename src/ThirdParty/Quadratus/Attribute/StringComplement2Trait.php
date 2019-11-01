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
 * Complement2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComplement2Trait {

    /**
     * Complement2.
     *
     * @var string
     */
    private $complement2;

    /**
     * Get the complement2.
     *
     * @return string Returns the complement2.
     */
    public function getComplement2() {
        return $this->complement2;
    }

    /**
     * Set the complement2.
     *
     * @param string $complement2 The complement2.
     */
    public function setComplement2($complement2) {
        $this->complement2 = $complement2;
        return $this;
    }
}
