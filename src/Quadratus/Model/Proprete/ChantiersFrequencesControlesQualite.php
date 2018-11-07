<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

/**
 * Chantiers frequences controles qualite model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ChantiersFrequencesControlesQualite {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Jour.
     *
     * @var string
     */
    private $jour;

    /**
     * Mois.
     *
     * @var string
     */
    private $mois;

    /**
     * Numero freq.
     *
     * @var int
     */
    private $numeroFreq;

    /**
     * Que premiere annee.
     *
     * @var boolean
     */
    private $quePremiereAnnee;

    /**
     * Type controle.
     *
     * @var string
     */
    private $typeControle;

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
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the jour.
     *
     * @return string Returns the jour.
     */
    public function getJour() {
        return $this->jour;
    }

    /**
     * Get the mois.
     *
     * @return string Returns the mois.
     */
    public function getMois() {
        return $this->mois;
    }

    /**
     * Get the numero freq.
     *
     * @return int Returns the numero freq.
     */
    public function getNumeroFreq() {
        return $this->numeroFreq;
    }

    /**
     * Get the que premiere annee.
     *
     * @return boolean Returns the que premiere annee.
     */
    public function getQuePremiereAnnee() {
        return $this->quePremiereAnnee;
    }

    /**
     * Get the type controle.
     *
     * @return string Returns the type controle.
     */
    public function getTypeControle() {
        return $this->typeControle;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return ChantiersFrequencesControlesQualite Returns this chantiers frequences controles qualite.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return ChantiersFrequencesControlesQualite Returns this chantiers frequences controles qualite.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ChantiersFrequencesControlesQualite Returns this chantiers frequences controles qualite.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the jour.
     *
     * @param string $jour The jour.
     * @return ChantiersFrequencesControlesQualite Returns this chantiers frequences controles qualite.
     */
    public function setJour($jour) {
        $this->jour = $jour;
        return $this;
    }

    /**
     * Set the mois.
     *
     * @param string $mois The mois.
     * @return ChantiersFrequencesControlesQualite Returns this chantiers frequences controles qualite.
     */
    public function setMois($mois) {
        $this->mois = $mois;
        return $this;
    }

    /**
     * Set the numero freq.
     *
     * @param int $numeroFreq The numero freq.
     * @return ChantiersFrequencesControlesQualite Returns this chantiers frequences controles qualite.
     */
    public function setNumeroFreq($numeroFreq) {
        $this->numeroFreq = $numeroFreq;
        return $this;
    }

    /**
     * Set the que premiere annee.
     *
     * @param boolean $quePremiereAnnee The que premiere annee.
     * @return ChantiersFrequencesControlesQualite Returns this chantiers frequences controles qualite.
     */
    public function setQuePremiereAnnee($quePremiereAnnee) {
        $this->quePremiereAnnee = $quePremiereAnnee;
        return $this;
    }

    /**
     * Set the type controle.
     *
     * @param string $typeControle The type controle.
     * @return ChantiersFrequencesControlesQualite Returns this chantiers frequences controles qualite.
     */
    public function setTypeControle($typeControle) {
        $this->typeControle = $typeControle;
        return $this;
    }

}
