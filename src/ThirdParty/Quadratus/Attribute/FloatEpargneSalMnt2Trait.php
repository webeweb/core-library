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
 * Epargne sal mnt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEpargneSalMnt2Trait {

    /**
     * Epargne sal mnt2.
     *
     * @var float
     */
    private $epargneSalMnt2;

    /**
     * Get the epargne sal mnt2.
     *
     * @return float Returns the epargne sal mnt2.
     */
    public function getEpargneSalMnt2() {
        return $this->epargneSalMnt2;
    }

    /**
     * Set the epargne sal mnt2.
     *
     * @param float $epargneSalMnt2 The epargne sal mnt2.
     */
    public function setEpargneSalMnt2($epargneSalMnt2) {
        $this->epargneSalMnt2 = $epargneSalMnt2;
        return $this;
    }
}
