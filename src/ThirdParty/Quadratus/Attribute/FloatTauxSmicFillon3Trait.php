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
 * Taux smic fillon3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxSmicFillon3Trait {

    /**
     * Taux smic fillon3.
     *
     * @var float
     */
    private $tauxSmicFillon3;

    /**
     * Get the taux smic fillon3.
     *
     * @return float Returns the taux smic fillon3.
     */
    public function getTauxSmicFillon3() {
        return $this->tauxSmicFillon3;
    }

    /**
     * Set the taux smic fillon3.
     *
     * @param float $tauxSmicFillon3 The taux smic fillon3.
     */
    public function setTauxSmicFillon3($tauxSmicFillon3) {
        $this->tauxSmicFillon3 = $tauxSmicFillon3;
        return $this;
    }
}
