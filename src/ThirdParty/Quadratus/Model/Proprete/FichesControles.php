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

use DateTime;

/**
 * Fiches controles model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FichesControles {

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
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Date controle.
     *
     * @var DateTime
     */
    private $dateControle;

    /**
     * Date transfert.
     *
     * @var DateTime
     */
    private $dateTransfert;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Numero reclamation.
     *
     * @var int
     */
    private $numeroReclamation;

    /**
     * Uniq i d synchro.
     *
     * @var string
     */
    private $uniqIDSynchro;

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
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the date controle.
     *
     * @return DateTime Returns the date controle.
     */
    public function getDateControle() {
        return $this->dateControle;
    }

    /**
     * Get the date transfert.
     *
     * @return DateTime Returns the date transfert.
     */
    public function getDateTransfert() {
        return $this->dateTransfert;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
    }

    /**
     * Get the numero reclamation.
     *
     * @return int Returns the numero reclamation.
     */
    public function getNumeroReclamation() {
        return $this->numeroReclamation;
    }

    /**
     * Get the uniq i d synchro.
     *
     * @return string Returns the uniq i d synchro.
     */
    public function getUniqIDSynchro() {
        return $this->uniqIDSynchro;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return FichesControles Returns this fiches controles.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return FichesControles Returns this fiches controles.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return FichesControles Returns this fiches controles.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return FichesControles Returns this fiches controles.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the date controle.
     *
     * @param DateTime $dateControle The date controle.
     * @return FichesControles Returns this fiches controles.
     */
    public function setDateControle(DateTime $dateControle = null) {
        $this->dateControle = $dateControle;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime $dateTransfert The date transfert.
     * @return FichesControles Returns this fiches controles.
     */
    public function setDateTransfert(DateTime $dateTransfert = null) {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return FichesControles Returns this fiches controles.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return FichesControles Returns this fiches controles.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return FichesControles Returns this fiches controles.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the numero reclamation.
     *
     * @param int $numeroReclamation The numero reclamation.
     * @return FichesControles Returns this fiches controles.
     */
    public function setNumeroReclamation($numeroReclamation) {
        $this->numeroReclamation = $numeroReclamation;
        return $this;
    }

    /**
     * Set the uniq i d synchro.
     *
     * @param string $uniqIDSynchro The uniq i d synchro.
     * @return FichesControles Returns this fiches controles.
     */
    public function setUniqIDSynchro($uniqIDSynchro) {
        $this->uniqIDSynchro = $uniqIDSynchro;
        return $this;
    }
}
