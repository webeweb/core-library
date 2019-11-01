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
 * Qte tr5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteTr5Trait {

    /**
     * Qte tr5.
     *
     * @var float
     */
    private $qteTr5;

    /**
     * Get the qte tr5.
     *
     * @return float Returns the qte tr5.
     */
    public function getQteTr5() {
        return $this->qteTr5;
    }

    /**
     * Set the qte tr5.
     *
     * @param float $qteTr5 The qte tr5.
     */
    public function setQteTr5($qteTr5) {
        $this->qteTr5 = $qteTr5;
        return $this;
    }
}
