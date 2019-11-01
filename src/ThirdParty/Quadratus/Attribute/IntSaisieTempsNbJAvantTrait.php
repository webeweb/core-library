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
 * Saisie temps nb j avant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntSaisieTempsNbJAvantTrait {

    /**
     * Saisie temps nb j avant.
     *
     * @var int
     */
    private $saisieTempsNbJAvant;

    /**
     * Get the saisie temps nb j avant.
     *
     * @return int Returns the saisie temps nb j avant.
     */
    public function getSaisieTempsNbJAvant() {
        return $this->saisieTempsNbJAvant;
    }

    /**
     * Set the saisie temps nb j avant.
     *
     * @param int $saisieTempsNbJAvant The saisie temps nb j avant.
     */
    public function setSaisieTempsNbJAvant($saisieTempsNbJAvant) {
        $this->saisieTempsNbJAvant = $saisieTempsNbJAvant;
        return $this;
    }
}
