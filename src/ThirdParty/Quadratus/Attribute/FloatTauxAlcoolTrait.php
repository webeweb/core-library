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
 * Taux alcool trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxAlcoolTrait {

    /**
     * Taux alcool.
     *
     * @var float
     */
    private $tauxAlcool;

    /**
     * Get the taux alcool.
     *
     * @return float Returns the taux alcool.
     */
    public function getTauxAlcool() {
        return $this->tauxAlcool;
    }

    /**
     * Set the taux alcool.
     *
     * @param float $tauxAlcool The taux alcool.
     */
    public function setTauxAlcool($tauxAlcool) {
        $this->tauxAlcool = $tauxAlcool;
        return $this;
    }
}
