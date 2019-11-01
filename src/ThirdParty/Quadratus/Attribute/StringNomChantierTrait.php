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
 * Nom chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomChantierTrait {

    /**
     * Nom chantier.
     *
     * @var string
     */
    private $nomChantier;

    /**
     * Get the nom chantier.
     *
     * @return string Returns the nom chantier.
     */
    public function getNomChantier() {
        return $this->nomChantier;
    }

    /**
     * Set the nom chantier.
     *
     * @param string $nomChantier The nom chantier.
     */
    public function setNomChantier($nomChantier) {
        $this->nomChantier = $nomChantier;
        return $this;
    }
}
