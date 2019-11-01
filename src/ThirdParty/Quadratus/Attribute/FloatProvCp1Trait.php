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
 * Prov cp1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatProvCp1Trait {

    /**
     * Prov cp1.
     *
     * @var float
     */
    private $provCp1;

    /**
     * Get the prov cp1.
     *
     * @return float Returns the prov cp1.
     */
    public function getProvCp1() {
        return $this->provCp1;
    }

    /**
     * Set the prov cp1.
     *
     * @param float $provCp1 The prov cp1.
     */
    public function setProvCp1($provCp1) {
        $this->provCp1 = $provCp1;
        return $this;
    }
}
