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
 * Qte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteTrait {

    /**
     * Qte.
     *
     * @var float
     */
    private $qte;

    /**
     * Get the qte.
     *
     * @return float Returns the qte.
     */
    public function getQte() {
        return $this->qte;
    }

    /**
     * Set the qte.
     *
     * @param float $qte The qte.
     */
    public function setQte($qte) {
        $this->qte = $qte;
        return $this;
    }
}
