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
 * Numero registre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroRegistreTrait {

    /**
     * Numero registre.
     *
     * @var string
     */
    private $numeroRegistre;

    /**
     * Get the numero registre.
     *
     * @return string Returns the numero registre.
     */
    public function getNumeroRegistre() {
        return $this->numeroRegistre;
    }

    /**
     * Set the numero registre.
     *
     * @param string $numeroRegistre The numero registre.
     */
    public function setNumeroRegistre($numeroRegistre) {
        $this->numeroRegistre = $numeroRegistre;
        return $this;
    }
}
