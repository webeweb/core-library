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
 * Pu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPuTrait {

    /**
     * Pu.
     *
     * @var float
     */
    private $pu;

    /**
     * Get the pu.
     *
     * @return float Returns the pu.
     */
    public function getPu() {
        return $this->pu;
    }

    /**
     * Set the pu.
     *
     * @param float $pu The pu.
     */
    public function setPu($pu) {
        $this->pu = $pu;
        return $this;
    }
}
