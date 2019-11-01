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
 * Taux smic fillon2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxSmicFillon2Trait {

    /**
     * Taux smic fillon2.
     *
     * @var float
     */
    private $tauxSmicFillon2;

    /**
     * Get the taux smic fillon2.
     *
     * @return float Returns the taux smic fillon2.
     */
    public function getTauxSmicFillon2() {
        return $this->tauxSmicFillon2;
    }

    /**
     * Set the taux smic fillon2.
     *
     * @param float $tauxSmicFillon2 The taux smic fillon2.
     */
    public function setTauxSmicFillon2($tauxSmicFillon2) {
        $this->tauxSmicFillon2 = $tauxSmicFillon2;
        return $this;
    }
}
