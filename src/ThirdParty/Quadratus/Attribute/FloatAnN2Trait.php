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
 * An n2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAnN2Trait {

    /**
     * An n2.
     *
     * @var float
     */
    private $anN2;

    /**
     * Get the an n2.
     *
     * @return float Returns the an n2.
     */
    public function getAnN2() {
        return $this->anN2;
    }

    /**
     * Set the an n2.
     *
     * @param float $anN2 The an n2.
     */
    public function setAnN2($anN2) {
        $this->anN2 = $anN2;
        return $this;
    }
}
