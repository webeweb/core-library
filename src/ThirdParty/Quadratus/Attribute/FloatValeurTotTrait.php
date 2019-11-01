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
 * Valeur tot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurTotTrait {

    /**
     * Valeur tot.
     *
     * @var float
     */
    private $valeurTot;

    /**
     * Get the valeur tot.
     *
     * @return float Returns the valeur tot.
     */
    public function getValeurTot() {
        return $this->valeurTot;
    }

    /**
     * Set the valeur tot.
     *
     * @param float $valeurTot The valeur tot.
     */
    public function setValeurTot($valeurTot) {
        $this->valeurTot = $valeurTot;
        return $this;
    }
}
