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
 * Qte tr2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteTr2Trait {

    /**
     * Qte tr2.
     *
     * @var float
     */
    private $qteTr2;

    /**
     * Get the qte tr2.
     *
     * @return float Returns the qte tr2.
     */
    public function getQteTr2() {
        return $this->qteTr2;
    }

    /**
     * Set the qte tr2.
     *
     * @param float $qteTr2 The qte tr2.
     */
    public function setQteTr2($qteTr2) {
        $this->qteTr2 = $qteTr2;
        return $this;
    }
}
