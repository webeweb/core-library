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
 * Dont capital trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDontCapitalTrait {

    /**
     * Dont capital.
     *
     * @var float
     */
    private $dontCapital;

    /**
     * Get the dont capital.
     *
     * @return float Returns the dont capital.
     */
    public function getDontCapital() {
        return $this->dontCapital;
    }

    /**
     * Set the dont capital.
     *
     * @param float $dontCapital The dont capital.
     */
    public function setDontCapital($dontCapital) {
        $this->dontCapital = $dontCapital;
        return $this;
    }
}
