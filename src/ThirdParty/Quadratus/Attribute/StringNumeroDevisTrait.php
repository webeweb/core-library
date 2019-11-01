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
 * Numero devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroDevisTrait {

    /**
     * Numero devis.
     *
     * @var string
     */
    private $numeroDevis;

    /**
     * Get the numero devis.
     *
     * @return string Returns the numero devis.
     */
    public function getNumeroDevis() {
        return $this->numeroDevis;
    }

    /**
     * Set the numero devis.
     *
     * @param string $numeroDevis The numero devis.
     */
    public function setNumeroDevis($numeroDevis) {
        $this->numeroDevis = $numeroDevis;
        return $this;
    }
}
