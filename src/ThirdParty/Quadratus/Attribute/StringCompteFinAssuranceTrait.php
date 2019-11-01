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
 * Compte fin assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteFinAssuranceTrait {

    /**
     * Compte fin assurance.
     *
     * @var string
     */
    private $compteFinAssurance;

    /**
     * Get the compte fin assurance.
     *
     * @return string Returns the compte fin assurance.
     */
    public function getCompteFinAssurance() {
        return $this->compteFinAssurance;
    }

    /**
     * Set the compte fin assurance.
     *
     * @param string $compteFinAssurance The compte fin assurance.
     */
    public function setCompteFinAssurance($compteFinAssurance) {
        $this->compteFinAssurance = $compteFinAssurance;
        return $this;
    }
}
