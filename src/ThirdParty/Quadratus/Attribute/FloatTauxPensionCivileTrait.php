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
 * Taux pension civile trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxPensionCivileTrait {

    /**
     * Taux pension civile.
     *
     * @var float
     */
    private $tauxPensionCivile;

    /**
     * Get the taux pension civile.
     *
     * @return float Returns the taux pension civile.
     */
    public function getTauxPensionCivile() {
        return $this->tauxPensionCivile;
    }

    /**
     * Set the taux pension civile.
     *
     * @param float $tauxPensionCivile The taux pension civile.
     */
    public function setTauxPensionCivile($tauxPensionCivile) {
        $this->tauxPensionCivile = $tauxPensionCivile;
        return $this;
    }
}
