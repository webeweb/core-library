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
 * Noeud local trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNoeudLocalTrait {

    /**
     * Noeud local.
     *
     * @var bool
     */
    private $noeudLocal;

    /**
     * Get the noeud local.
     *
     * @return bool Returns the noeud local.
     */
    public function getNoeudLocal() {
        return $this->noeudLocal;
    }

    /**
     * Set the noeud local.
     *
     * @param bool $noeudLocal The noeud local.
     */
    public function setNoeudLocal($noeudLocal) {
        $this->noeudLocal = $noeudLocal;
        return $this;
    }
}
