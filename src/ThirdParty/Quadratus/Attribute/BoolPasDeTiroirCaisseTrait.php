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
 * Pas de tiroir caisse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasDeTiroirCaisseTrait {

    /**
     * Pas de tiroir caisse.
     *
     * @var bool
     */
    private $pasDeTiroirCaisse;

    /**
     * Get the pas de tiroir caisse.
     *
     * @return bool Returns the pas de tiroir caisse.
     */
    public function getPasDeTiroirCaisse() {
        return $this->pasDeTiroirCaisse;
    }

    /**
     * Set the pas de tiroir caisse.
     *
     * @param bool $pasDeTiroirCaisse The pas de tiroir caisse.
     */
    public function setPasDeTiroirCaisse($pasDeTiroirCaisse) {
        $this->pasDeTiroirCaisse = $pasDeTiroirCaisse;
        return $this;
    }
}
