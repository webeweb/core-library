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
 * Regul ducs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRegulDucsTrait {

    /**
     * Regul ducs.
     *
     * @var float
     */
    private $regulDucs;

    /**
     * Get the regul ducs.
     *
     * @return float Returns the regul ducs.
     */
    public function getRegulDucs() {
        return $this->regulDucs;
    }

    /**
     * Set the regul ducs.
     *
     * @param float $regulDucs The regul ducs.
     */
    public function setRegulDucs($regulDucs) {
        $this->regulDucs = $regulDucs;
        return $this;
    }
}
