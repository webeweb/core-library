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
 * Numero serie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroSerieTrait {

    /**
     * Numero serie.
     *
     * @var string
     */
    private $numeroSerie;

    /**
     * Get the numero serie.
     *
     * @return string Returns the numero serie.
     */
    public function getNumeroSerie() {
        return $this->numeroSerie;
    }

    /**
     * Set the numero serie.
     *
     * @param string $numeroSerie The numero serie.
     */
    public function setNumeroSerie($numeroSerie) {
        $this->numeroSerie = $numeroSerie;
        return $this;
    }
}
