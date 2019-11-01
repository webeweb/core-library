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
 * Numero noeud trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroNoeudTrait {

    /**
     * Numero noeud.
     *
     * @var int
     */
    private $numeroNoeud;

    /**
     * Get the numero noeud.
     *
     * @return int Returns the numero noeud.
     */
    public function getNumeroNoeud() {
        return $this->numeroNoeud;
    }

    /**
     * Set the numero noeud.
     *
     * @param int $numeroNoeud The numero noeud.
     */
    public function setNumeroNoeud($numeroNoeud) {
        $this->numeroNoeud = $numeroNoeud;
        return $this;
    }
}
