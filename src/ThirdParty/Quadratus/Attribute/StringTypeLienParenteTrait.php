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
 * Type lien parente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeLienParenteTrait {

    /**
     * Type lien parente.
     *
     * @var string
     */
    private $typeLienParente;

    /**
     * Get the type lien parente.
     *
     * @return string Returns the type lien parente.
     */
    public function getTypeLienParente() {
        return $this->typeLienParente;
    }

    /**
     * Set the type lien parente.
     *
     * @param string $typeLienParente The type lien parente.
     */
    public function setTypeLienParente($typeLienParente) {
        $this->typeLienParente = $typeLienParente;
        return $this;
    }
}
