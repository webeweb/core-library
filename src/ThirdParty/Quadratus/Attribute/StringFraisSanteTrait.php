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
 * Frais sante trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFraisSanteTrait {

    /**
     * Frais sante.
     *
     * @var string
     */
    private $fraisSante;

    /**
     * Get the frais sante.
     *
     * @return string Returns the frais sante.
     */
    public function getFraisSante() {
        return $this->fraisSante;
    }

    /**
     * Set the frais sante.
     *
     * @param string $fraisSante The frais sante.
     */
    public function setFraisSante($fraisSante) {
        $this->fraisSante = $fraisSante;
        return $this;
    }
}
