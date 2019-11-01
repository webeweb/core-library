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
 * C colect32 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCColect32Trait {

    /**
     * C colect32.
     *
     * @var string
     */
    private $cColect32;

    /**
     * Get the c colect32.
     *
     * @return string Returns the c colect32.
     */
    public function getCColect32() {
        return $this->cColect32;
    }

    /**
     * Set the c colect32.
     *
     * @param string $cColect32 The c colect32.
     */
    public function setCColect32($cColect32) {
        $this->cColect32 = $cColect32;
        return $this;
    }
}
