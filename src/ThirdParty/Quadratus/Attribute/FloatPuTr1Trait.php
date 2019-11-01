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
 * Pu tr1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPuTr1Trait {

    /**
     * Pu tr1.
     *
     * @var float
     */
    private $puTr1;

    /**
     * Get the pu tr1.
     *
     * @return float Returns the pu tr1.
     */
    public function getPuTr1() {
        return $this->puTr1;
    }

    /**
     * Set the pu tr1.
     *
     * @param float $puTr1 The pu tr1.
     */
    public function setPuTr1($puTr1) {
        $this->puTr1 = $puTr1;
        return $this;
    }
}
