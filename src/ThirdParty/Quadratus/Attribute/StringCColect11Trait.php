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
 * C colect11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCColect11Trait {

    /**
     * C colect11.
     *
     * @var string
     */
    private $cColect11;

    /**
     * Get the c colect11.
     *
     * @return string Returns the c colect11.
     */
    public function getCColect11() {
        return $this->cColect11;
    }

    /**
     * Set the c colect11.
     *
     * @param string $cColect11 The c colect11.
     */
    public function setCColect11($cColect11) {
        $this->cColect11 = $cColect11;
        return $this;
    }
}
