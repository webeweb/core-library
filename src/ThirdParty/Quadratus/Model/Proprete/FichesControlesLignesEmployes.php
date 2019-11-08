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
 * Fiches controles lignes employes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FichesControlesLignesEmployes {

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
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code remplacant.
     *
     * @var string
     */
    private $codeRemplacant;

    /**
     * Numero fiche.
     *
     * @var int
     */
    private $numeroFiche;

    /**
     * Poste.
     *
     * @var string
     */
    private $poste;

    /**
     * Remarque.
     *
     * @var string
     */
    private $remarque;

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
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the code remplacant.
     *
     * @return string Returns the code remplacant.
     */
    public function getCodeRemplacant() {
        return $this->codeRemplacant;
    }

    /**
     * Get the numero fiche.
     *
     * @return int Returns the numero fiche.
     */
    public function getNumeroFiche() {
        return $this->numeroFiche;
    }

    /**
     * Get the poste.
     *
     * @return string Returns the poste.
     */
    public function getPoste() {
        return $this->poste;
    }

    /**
     * Get the remarque.
     *
     * @return string Returns the remarque.
     */
    public function getRemarque() {
        return $this->remarque;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code remplacant.
     *
     * @param string $codeRemplacant The code remplacant.
     */
    public function setCodeRemplacant($codeRemplacant) {
        $this->codeRemplacant = $codeRemplacant;
        return $this;
    }

    /**
     * Set the numero fiche.
     *
     * @param int $numeroFiche The numero fiche.
     */
    public function setNumeroFiche($numeroFiche) {
        $this->numeroFiche = $numeroFiche;
        return $this;
    }

    /**
     * Set the poste.
     *
     * @param string $poste The poste.
     */
    public function setPoste($poste) {
        $this->poste = $poste;
        return $this;
    }

    /**
     * Set the remarque.
     *
     * @param string $remarque The remarque.
     */
    public function setRemarque($remarque) {
        $this->remarque = $remarque;
        return $this;
    }
}
