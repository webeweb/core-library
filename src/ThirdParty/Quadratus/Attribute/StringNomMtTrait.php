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
 * Nom mt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomMtTrait {

    /**
     * Nom mt.
     *
     * @var string
     */
    private $nomMt;

    /**
     * Get the nom mt.
     *
     * @return string Returns the nom mt.
     */
    public function getNomMt() {
        return $this->nomMt;
    }

    /**
     * Set the nom mt.
     *
     * @param string $nomMt The nom mt.
     */
    public function setNomMt($nomMt) {
        $this->nomMt = $nomMt;
        return $this;
    }
}
