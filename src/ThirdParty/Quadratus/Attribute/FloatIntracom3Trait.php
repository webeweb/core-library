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
 * Intracom3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIntracom3Trait {

    /**
     * Intracom3.
     *
     * @var float
     */
    private $intracom3;

    /**
     * Get the intracom3.
     *
     * @return float Returns the intracom3.
     */
    public function getIntracom3() {
        return $this->intracom3;
    }

    /**
     * Set the intracom3.
     *
     * @param float $intracom3 The intracom3.
     */
    public function setIntracom3($intracom3) {
        $this->intracom3 = $intracom3;
        return $this;
    }
}
