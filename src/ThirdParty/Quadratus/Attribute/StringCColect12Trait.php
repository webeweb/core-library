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
 * C colect12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCColect12Trait {

    /**
     * C colect12.
     *
     * @var string
     */
    private $cColect12;

    /**
     * Get the c colect12.
     *
     * @return string Returns the c colect12.
     */
    public function getCColect12() {
        return $this->cColect12;
    }

    /**
     * Set the c colect12.
     *
     * @param string $cColect12 The c colect12.
     */
    public function setCColect12($cColect12) {
        $this->cColect12 = $cColect12;
        return $this;
    }
}
