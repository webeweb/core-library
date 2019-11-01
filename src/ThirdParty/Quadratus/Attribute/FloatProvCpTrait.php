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
 * Prov cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatProvCpTrait {

    /**
     * Prov cp.
     *
     * @var float
     */
    private $provCp;

    /**
     * Get the prov cp.
     *
     * @return float Returns the prov cp.
     */
    public function getProvCp() {
        return $this->provCp;
    }

    /**
     * Set the prov cp.
     *
     * @param float $provCp The prov cp.
     */
    public function setProvCp($provCp) {
        $this->provCp = $provCp;
        return $this;
    }
}
