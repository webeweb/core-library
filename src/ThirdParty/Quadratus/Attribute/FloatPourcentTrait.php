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
 * Pourcent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentTrait {

    /**
     * Pourcent.
     *
     * @var float
     */
    private $pourcent;

    /**
     * Get the pourcent.
     *
     * @return float Returns the pourcent.
     */
    public function getPourcent() {
        return $this->pourcent;
    }

    /**
     * Set the pourcent.
     *
     * @param float $pourcent The pourcent.
     */
    public function setPourcent($pourcent) {
        $this->pourcent = $pourcent;
        return $this;
    }
}
