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
 * Saisie inter jour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieInterJourTrait {

    /**
     * Saisie inter jour.
     *
     * @var bool
     */
    private $saisieInterJour;

    /**
     * Get the saisie inter jour.
     *
     * @return bool Returns the saisie inter jour.
     */
    public function getSaisieInterJour() {
        return $this->saisieInterJour;
    }

    /**
     * Set the saisie inter jour.
     *
     * @param bool $saisieInterJour The saisie inter jour.
     */
    public function setSaisieInterJour($saisieInterJour) {
        $this->saisieInterJour = $saisieInterJour;
        return $this;
    }
}
