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
 * Exo h mnt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExoHMnt2Trait {

    /**
     * Exo h mnt2.
     *
     * @var float
     */
    private $exoHMnt2;

    /**
     * Get the exo h mnt2.
     *
     * @return float Returns the exo h mnt2.
     */
    public function getExoHMnt2() {
        return $this->exoHMnt2;
    }

    /**
     * Set the exo h mnt2.
     *
     * @param float $exoHMnt2 The exo h mnt2.
     */
    public function setExoHMnt2($exoHMnt2) {
        $this->exoHMnt2 = $exoHMnt2;
        return $this;
    }
}
