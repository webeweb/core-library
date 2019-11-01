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
 * Taux sal tr c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxSalTrCTrait {

    /**
     * Taux sal tr c.
     *
     * @var float
     */
    private $tauxSalTrC;

    /**
     * Get the taux sal tr c.
     *
     * @return float Returns the taux sal tr c.
     */
    public function getTauxSalTrC() {
        return $this->tauxSalTrC;
    }

    /**
     * Set the taux sal tr c.
     *
     * @param float $tauxSalTrC The taux sal tr c.
     */
    public function setTauxSalTrC($tauxSalTrC) {
        $this->tauxSalTrC = $tauxSalTrC;
        return $this;
    }
}
