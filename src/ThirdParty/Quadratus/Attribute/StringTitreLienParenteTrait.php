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
 * Titre lien parente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTitreLienParenteTrait {

    /**
     * Titre lien parente.
     *
     * @var string
     */
    private $titreLienParente;

    /**
     * Get the titre lien parente.
     *
     * @return string Returns the titre lien parente.
     */
    public function getTitreLienParente() {
        return $this->titreLienParente;
    }

    /**
     * Set the titre lien parente.
     *
     * @param string $titreLienParente The titre lien parente.
     */
    public function setTitreLienParente($titreLienParente) {
        $this->titreLienParente = $titreLienParente;
        return $this;
    }
}
