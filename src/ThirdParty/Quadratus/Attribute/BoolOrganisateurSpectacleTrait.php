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
 * Organisateur spectacle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOrganisateurSpectacleTrait {

    /**
     * Organisateur spectacle.
     *
     * @var bool
     */
    private $organisateurSpectacle;

    /**
     * Get the organisateur spectacle.
     *
     * @return bool Returns the organisateur spectacle.
     */
    public function getOrganisateurSpectacle() {
        return $this->organisateurSpectacle;
    }

    /**
     * Set the organisateur spectacle.
     *
     * @param bool $organisateurSpectacle The organisateur spectacle.
     */
    public function setOrganisateurSpectacle($organisateurSpectacle) {
        $this->organisateurSpectacle = $organisateurSpectacle;
        return $this;
    }
}
