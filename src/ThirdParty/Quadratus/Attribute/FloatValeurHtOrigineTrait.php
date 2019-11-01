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
 * Valeur ht origine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurHtOrigineTrait {

    /**
     * Valeur ht origine.
     *
     * @var float
     */
    private $valeurHtOrigine;

    /**
     * Get the valeur ht origine.
     *
     * @return float Returns the valeur ht origine.
     */
    public function getValeurHtOrigine() {
        return $this->valeurHtOrigine;
    }

    /**
     * Set the valeur ht origine.
     *
     * @param float $valeurHtOrigine The valeur ht origine.
     */
    public function setValeurHtOrigine($valeurHtOrigine) {
        $this->valeurHtOrigine = $valeurHtOrigine;
        return $this;
    }
}
