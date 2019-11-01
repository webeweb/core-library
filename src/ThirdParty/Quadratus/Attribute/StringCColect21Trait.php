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
 * C colect21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCColect21Trait {

    /**
     * C colect21.
     *
     * @var string
     */
    private $cColect21;

    /**
     * Get the c colect21.
     *
     * @return string Returns the c colect21.
     */
    public function getCColect21() {
        return $this->cColect21;
    }

    /**
     * Set the c colect21.
     *
     * @param string $cColect21 The c colect21.
     */
    public function setCColect21($cColect21) {
        $this->cColect21 = $cColect21;
        return $this;
    }
}
