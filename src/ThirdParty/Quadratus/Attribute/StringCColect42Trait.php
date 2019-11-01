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
 * C colect42 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCColect42Trait {

    /**
     * C colect42.
     *
     * @var string
     */
    private $cColect42;

    /**
     * Get the c colect42.
     *
     * @return string Returns the c colect42.
     */
    public function getCColect42() {
        return $this->cColect42;
    }

    /**
     * Set the c colect42.
     *
     * @param string $cColect42 The c colect42.
     */
    public function setCColect42($cColect42) {
        $this->cColect42 = $cColect42;
        return $this;
    }
}
