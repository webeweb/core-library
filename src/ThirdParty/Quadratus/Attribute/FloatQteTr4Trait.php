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
 * Qte tr4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteTr4Trait {

    /**
     * Qte tr4.
     *
     * @var float
     */
    private $qteTr4;

    /**
     * Get the qte tr4.
     *
     * @return float Returns the qte tr4.
     */
    public function getQteTr4() {
        return $this->qteTr4;
    }

    /**
     * Set the qte tr4.
     *
     * @param float $qteTr4 The qte tr4.
     */
    public function setQteTr4($qteTr4) {
        $this->qteTr4 = $qteTr4;
        return $this;
    }
}
