<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Valorisation horaire model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ValorisationHoraire {

    /**
     * Cout horaire.
     *
     * @var float
     */
    private $coutHoraire;

    /**
     * Qualification.
     *
     * @var string
     */
    private $qualification;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the cout horaire.
     *
     * @return float Returns the cout horaire.
     */
    public function getCoutHoraire() {
        return $this->coutHoraire;
    }

    /**
     * Get the qualification.
     *
     * @return string Returns the qualification.
     */
    public function getQualification() {
        return $this->qualification;
    }

    /**
     * Set the cout horaire.
     *
     * @param float $coutHoraire The cout horaire.
     * @return ValorisationHoraire Returns this valorisation horaire.
     */
    public function setCoutHoraire($coutHoraire) {
        $this->coutHoraire = $coutHoraire;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string $qualification The qualification.
     * @return ValorisationHoraire Returns this valorisation horaire.
     */
    public function setQualification($qualification) {
        $this->qualification = $qualification;
        return $this;
    }
}
