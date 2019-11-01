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
 * Type2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatType2Trait {

    /**
     * Type2.
     *
     * @var float
     */
    private $type2;

    /**
     * Get the type2.
     *
     * @return float Returns the type2.
     */
    public function getType2() {
        return $this->type2;
    }

    /**
     * Set the type2.
     *
     * @param float $type2 The type2.
     */
    public function setType2($type2) {
        $this->type2 = $type2;
        return $this;
    }
}
