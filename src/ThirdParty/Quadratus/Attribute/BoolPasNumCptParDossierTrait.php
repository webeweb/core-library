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
 * Pas num cpt par dossier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasNumCptParDossierTrait {

    /**
     * Pas num cpt par dossier.
     *
     * @var bool
     */
    private $pasNumCptParDossier;

    /**
     * Get the pas num cpt par dossier.
     *
     * @return bool Returns the pas num cpt par dossier.
     */
    public function getPasNumCptParDossier() {
        return $this->pasNumCptParDossier;
    }

    /**
     * Set the pas num cpt par dossier.
     *
     * @param bool $pasNumCptParDossier The pas num cpt par dossier.
     */
    public function setPasNumCptParDossier($pasNumCptParDossier) {
        $this->pasNumCptParDossier = $pasNumCptParDossier;
        return $this;
    }
}
