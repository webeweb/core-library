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
 * Qte tr1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteTr1Trait {

    /**
     * Qte tr1.
     *
     * @var float
     */
    private $qteTr1;

    /**
     * Get the qte tr1.
     *
     * @return float Returns the qte tr1.
     */
    public function getQteTr1() {
        return $this->qteTr1;
    }

    /**
     * Set the qte tr1.
     *
     * @param float $qteTr1 The qte tr1.
     */
    public function setQteTr1($qteTr1) {
        $this->qteTr1 = $qteTr1;
        return $this;
    }
}
