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
 * Compte debut assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteDebutAssuranceTrait {

    /**
     * Compte debut assurance.
     *
     * @var string
     */
    private $compteDebutAssurance;

    /**
     * Get the compte debut assurance.
     *
     * @return string Returns the compte debut assurance.
     */
    public function getCompteDebutAssurance() {
        return $this->compteDebutAssurance;
    }

    /**
     * Set the compte debut assurance.
     *
     * @param string $compteDebutAssurance The compte debut assurance.
     */
    public function setCompteDebutAssurance($compteDebutAssurance) {
        $this->compteDebutAssurance = $compteDebutAssurance;
        return $this;
    }
}
