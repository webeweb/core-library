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
 * Epargne sal mnt3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEpargneSalMnt3Trait {

    /**
     * Epargne sal mnt3.
     *
     * @var float
     */
    private $epargneSalMnt3;

    /**
     * Get the epargne sal mnt3.
     *
     * @return float Returns the epargne sal mnt3.
     */
    public function getEpargneSalMnt3() {
        return $this->epargneSalMnt3;
    }

    /**
     * Set the epargne sal mnt3.
     *
     * @param float $epargneSalMnt3 The epargne sal mnt3.
     */
    public function setEpargneSalMnt3($epargneSalMnt3) {
        $this->epargneSalMnt3 = $epargneSalMnt3;
        return $this;
    }
}
