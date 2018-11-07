<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * Temps previsionnels model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class TempsPrevisionnels {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code avenant.
     *
     * @var string
     */
    private $codeAvenant;

    /**
     * Code phase.
     *
     * @var string
     */
    private $codePhase;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Cout horaire.
     *
     * @var float
     */
    private $coutHoraire;

    /**
     * Nb heures.
     *
     * @var float
     */
    private $nbHeures;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code avenant.
     *
     * @return string Returns the code avenant.
     */
    public function getCodeAvenant() {
        return $this->codeAvenant;
    }

    /**
     * Get the code phase.
     *
     * @return string Returns the code phase.
     */
    public function getCodePhase() {
        return $this->codePhase;
    }

    /**
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
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
     * Get the nb heures.
     *
     * @return float Returns the nb heures.
     */
    public function getNbHeures() {
        return $this->nbHeures;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return TempsPrevisionnels Returns this temps previsionnels.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code avenant.
     *
     * @param string $codeAvenant The code avenant.
     * @return TempsPrevisionnels Returns this temps previsionnels.
     */
    public function setCodeAvenant($codeAvenant) {
        $this->codeAvenant = $codeAvenant;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string $codePhase The code phase.
     * @return TempsPrevisionnels Returns this temps previsionnels.
     */
    public function setCodePhase($codePhase) {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return TempsPrevisionnels Returns this temps previsionnels.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the cout horaire.
     *
     * @param float $coutHoraire The cout horaire.
     * @return TempsPrevisionnels Returns this temps previsionnels.
     */
    public function setCoutHoraire($coutHoraire) {
        $this->coutHoraire = $coutHoraire;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float $nbHeures The nb heures.
     * @return TempsPrevisionnels Returns this temps previsionnels.
     */
    public function setNbHeures($nbHeures) {
        $this->nbHeures = $nbHeures;
        return $this;
    }

}
