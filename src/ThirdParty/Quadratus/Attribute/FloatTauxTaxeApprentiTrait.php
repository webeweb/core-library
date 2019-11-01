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
 * Taux taxe apprenti trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTaxeApprentiTrait {

    /**
     * Taux taxe apprenti.
     *
     * @var float
     */
    private $tauxTaxeApprenti;

    /**
     * Get the taux taxe apprenti.
     *
     * @return float Returns the taux taxe apprenti.
     */
    public function getTauxTaxeApprenti() {
        return $this->tauxTaxeApprenti;
    }

    /**
     * Set the taux taxe apprenti.
     *
     * @param float $tauxTaxeApprenti The taux taxe apprenti.
     */
    public function setTauxTaxeApprenti($tauxTaxeApprenti) {
        $this->tauxTaxeApprenti = $tauxTaxeApprenti;
        return $this;
    }
}
