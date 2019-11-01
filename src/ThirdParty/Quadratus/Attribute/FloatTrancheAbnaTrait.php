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
 * Tranche abna trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheAbnaTrait {

    /**
     * Tranche abna.
     *
     * @var float
     */
    private $trancheAbna;

    /**
     * Get the tranche abna.
     *
     * @return float Returns the tranche abna.
     */
    public function getTrancheAbna() {
        return $this->trancheAbna;
    }

    /**
     * Set the tranche abna.
     *
     * @param float $trancheAbna The tranche abna.
     */
    public function setTrancheAbna($trancheAbna) {
        $this->trancheAbna = $trancheAbna;
        return $this;
    }
}
