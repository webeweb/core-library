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
 * Fiche cli ne pas proposer creation dpdc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFicheCliNePasProposerCreationDpdcTrait {

    /**
     * Fiche cli ne pas proposer creation dpdc.
     *
     * @var bool
     */
    private $ficheCliNePasProposerCreationDpdc;

    /**
     * Get the fiche cli ne pas proposer creation dpdc.
     *
     * @return bool Returns the fiche cli ne pas proposer creation dpdc.
     */
    public function getFicheCliNePasProposerCreationDpdc() {
        return $this->ficheCliNePasProposerCreationDpdc;
    }

    /**
     * Set the fiche cli ne pas proposer creation dpdc.
     *
     * @param bool $ficheCliNePasProposerCreationDpdc The fiche cli ne pas proposer creation dpdc.
     */
    public function setFicheCliNePasProposerCreationDpdc($ficheCliNePasProposerCreationDpdc) {
        $this->ficheCliNePasProposerCreationDpdc = $ficheCliNePasProposerCreationDpdc;
        return $this;
    }
}
