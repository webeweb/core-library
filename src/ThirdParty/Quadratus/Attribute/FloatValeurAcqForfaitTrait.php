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
 * Valeur acq forfait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurAcqForfaitTrait {

    /**
     * Valeur acq forfait.
     *
     * @var float
     */
    private $valeurAcqForfait;

    /**
     * Get the valeur acq forfait.
     *
     * @return float Returns the valeur acq forfait.
     */
    public function getValeurAcqForfait() {
        return $this->valeurAcqForfait;
    }

    /**
     * Set the valeur acq forfait.
     *
     * @param float $valeurAcqForfait The valeur acq forfait.
     */
    public function setValeurAcqForfait($valeurAcqForfait) {
        $this->valeurAcqForfait = $valeurAcqForfait;
        return $this;
    }
}
