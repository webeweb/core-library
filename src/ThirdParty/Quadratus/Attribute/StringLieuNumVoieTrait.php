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
 * Lieu num voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuNumVoieTrait {

    /**
     * Lieu num voie.
     *
     * @var string
     */
    private $lieuNumVoie;

    /**
     * Get the lieu num voie.
     *
     * @return string Returns the lieu num voie.
     */
    public function getLieuNumVoie() {
        return $this->lieuNumVoie;
    }

    /**
     * Set the lieu num voie.
     *
     * @param string $lieuNumVoie The lieu num voie.
     */
    public function setLieuNumVoie($lieuNumVoie) {
        $this->lieuNumVoie = $lieuNumVoie;
        return $this;
    }
}
