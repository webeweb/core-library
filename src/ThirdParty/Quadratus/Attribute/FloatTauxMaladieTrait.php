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
 * Taux maladie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxMaladieTrait {

    /**
     * Taux maladie.
     *
     * @var float
     */
    private $tauxMaladie;

    /**
     * Get the taux maladie.
     *
     * @return float Returns the taux maladie.
     */
    public function getTauxMaladie() {
        return $this->tauxMaladie;
    }

    /**
     * Set the taux maladie.
     *
     * @param float $tauxMaladie The taux maladie.
     */
    public function setTauxMaladie($tauxMaladie) {
        $this->tauxMaladie = $tauxMaladie;
        return $this;
    }
}
