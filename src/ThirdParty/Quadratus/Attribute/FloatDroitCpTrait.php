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
 * Droit cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDroitCpTrait {

    /**
     * Droit cp.
     *
     * @var float
     */
    private $droitCp;

    /**
     * Get the droit cp.
     *
     * @return float Returns the droit cp.
     */
    public function getDroitCp() {
        return $this->droitCp;
    }

    /**
     * Set the droit cp.
     *
     * @param float $droitCp The droit cp.
     */
    public function setDroitCp($droitCp) {
        $this->droitCp = $droitCp;
        return $this;
    }
}
