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
 * Intracom4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIntracom4Trait {

    /**
     * Intracom4.
     *
     * @var float
     */
    private $intracom4;

    /**
     * Get the intracom4.
     *
     * @return float Returns the intracom4.
     */
    public function getIntracom4() {
        return $this->intracom4;
    }

    /**
     * Set the intracom4.
     *
     * @param float $intracom4 The intracom4.
     */
    public function setIntracom4($intracom4) {
        $this->intracom4 = $intracom4;
        return $this;
    }
}
