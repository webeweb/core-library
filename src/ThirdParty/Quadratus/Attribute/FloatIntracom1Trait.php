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
 * Intracom1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIntracom1Trait {

    /**
     * Intracom1.
     *
     * @var float
     */
    private $intracom1;

    /**
     * Get the intracom1.
     *
     * @return float Returns the intracom1.
     */
    public function getIntracom1() {
        return $this->intracom1;
    }

    /**
     * Set the intracom1.
     *
     * @param float $intracom1 The intracom1.
     */
    public function setIntracom1($intracom1) {
        $this->intracom1 = $intracom1;
        return $this;
    }
}
