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
 * Intracom2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIntracom2Trait {

    /**
     * Intracom2.
     *
     * @var float
     */
    private $intracom2;

    /**
     * Get the intracom2.
     *
     * @return float Returns the intracom2.
     */
    public function getIntracom2() {
        return $this->intracom2;
    }

    /**
     * Set the intracom2.
     *
     * @param float $intracom2 The intracom2.
     */
    public function setIntracom2($intracom2) {
        $this->intracom2 = $intracom2;
        return $this;
    }
}
