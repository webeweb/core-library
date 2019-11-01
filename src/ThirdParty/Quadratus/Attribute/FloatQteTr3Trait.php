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
 * Qte tr3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteTr3Trait {

    /**
     * Qte tr3.
     *
     * @var float
     */
    private $qteTr3;

    /**
     * Get the qte tr3.
     *
     * @return float Returns the qte tr3.
     */
    public function getQteTr3() {
        return $this->qteTr3;
    }

    /**
     * Set the qte tr3.
     *
     * @param float $qteTr3 The qte tr3.
     */
    public function setQteTr3($qteTr3) {
        $this->qteTr3 = $qteTr3;
        return $this;
    }
}
