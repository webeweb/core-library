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
 * Qte mini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteMiniTrait {

    /**
     * Qte mini.
     *
     * @var float
     */
    private $qteMini;

    /**
     * Get the qte mini.
     *
     * @return float Returns the qte mini.
     */
    public function getQteMini() {
        return $this->qteMini;
    }

    /**
     * Set the qte mini.
     *
     * @param float $qteMini The qte mini.
     */
    public function setQteMini($qteMini) {
        $this->qteMini = $qteMini;
        return $this;
    }
}
