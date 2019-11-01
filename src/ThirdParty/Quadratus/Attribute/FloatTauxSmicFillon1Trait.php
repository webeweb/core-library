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
 * Taux smic fillon1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxSmicFillon1Trait {

    /**
     * Taux smic fillon1.
     *
     * @var float
     */
    private $tauxSmicFillon1;

    /**
     * Get the taux smic fillon1.
     *
     * @return float Returns the taux smic fillon1.
     */
    public function getTauxSmicFillon1() {
        return $this->tauxSmicFillon1;
    }

    /**
     * Set the taux smic fillon1.
     *
     * @param float $tauxSmicFillon1 The taux smic fillon1.
     */
    public function setTauxSmicFillon1($tauxSmicFillon1) {
        $this->tauxSmicFillon1 = $tauxSmicFillon1;
        return $this;
    }
}
