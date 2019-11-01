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
 * Lieu nom voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuNomVoieTrait {

    /**
     * Lieu nom voie.
     *
     * @var string
     */
    private $lieuNomVoie;

    /**
     * Get the lieu nom voie.
     *
     * @return string Returns the lieu nom voie.
     */
    public function getLieuNomVoie() {
        return $this->lieuNomVoie;
    }

    /**
     * Set the lieu nom voie.
     *
     * @param string $lieuNomVoie The lieu nom voie.
     */
    public function setLieuNomVoie($lieuNomVoie) {
        $this->lieuNomVoie = $lieuNomVoie;
        return $this;
    }
}
