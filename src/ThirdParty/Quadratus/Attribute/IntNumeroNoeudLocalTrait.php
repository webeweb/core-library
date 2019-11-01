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
 * Numero noeud local trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroNoeudLocalTrait {

    /**
     * Numero noeud local.
     *
     * @var int
     */
    private $numeroNoeudLocal;

    /**
     * Get the numero noeud local.
     *
     * @return int Returns the numero noeud local.
     */
    public function getNumeroNoeudLocal() {
        return $this->numeroNoeudLocal;
    }

    /**
     * Set the numero noeud local.
     *
     * @param int $numeroNoeudLocal The numero noeud local.
     */
    public function setNumeroNoeudLocal($numeroNoeudLocal) {
        $this->numeroNoeudLocal = $numeroNoeudLocal;
        return $this;
    }
}
