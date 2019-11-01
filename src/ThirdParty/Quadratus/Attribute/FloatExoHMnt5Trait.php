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
 * Exo h mnt5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExoHMnt5Trait {

    /**
     * Exo h mnt5.
     *
     * @var float
     */
    private $exoHMnt5;

    /**
     * Get the exo h mnt5.
     *
     * @return float Returns the exo h mnt5.
     */
    public function getExoHMnt5() {
        return $this->exoHMnt5;
    }

    /**
     * Set the exo h mnt5.
     *
     * @param float $exoHMnt5 The exo h mnt5.
     */
    public function setExoHMnt5($exoHMnt5) {
        $this->exoHMnt5 = $exoHMnt5;
        return $this;
    }
}
