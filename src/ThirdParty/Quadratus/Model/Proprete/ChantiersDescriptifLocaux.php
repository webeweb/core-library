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
 * Chantiers descriptif locaux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersDescriptifLocaux {

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
     * Code critere1.
     *
     * @var string
     */
    private $codeCritere1;

    /**
     * Coefficient.
     *
     * @var float
     */
    private $coefficient;

    /**
     * Date transfert.
     *
     * @var DateTime|null
     */
    private $dateTransfert;

    /**
     * Famille elements.
     *
     * @var string
     */
    private $familleElements;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Libelle critere1.
     *
     * @var string
     */
    private $libelleCritere1;

    /**
     * Niveau noeud.
     *
     * @var int
     */
    private $niveauNoeud;

    /**
     * Noeud local.
     *
     * @var bool
     */
    private $noeudLocal;

    /**
     * Note objectif.
     *
     * @var float
     */
    private $noteObjectif;

    /**
     * Numero noeud.
     *
     * @var int
     */
    private $numeroNoeud;

    /**
     * Poste.
     *
     * @var string
     */
    private $poste;

    /**
     * Uniq id blocage.
     *
     * @var string
     */
    private $uniqIdBlocage;

    /**
     * Uniq id noeud.
     *
     * @var string
     */
    private $uniqIdNoeud;

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
     * Get the code critere1.
     *
     * @return string Returns the code critere1.
     */
    public function getCodeCritere1() {
        return $this->codeCritere1;
    }

    /**
     * Get the coefficient.
     *
     * @return float Returns the coefficient.
     */
    public function getCoefficient() {
        return $this->coefficient;
    }

    /**
     * Get the date transfert.
     *
     * @return DateTime|null Returns the date transfert.
     */
    public function getDateTransfert() {
        return $this->dateTransfert;
    }

    /**
     * Get the famille elements.
     *
     * @return string Returns the famille elements.
     */
    public function getFamilleElements() {
        return $this->familleElements;
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
     * Get the libelle critere1.
     *
     * @return string Returns the libelle critere1.
     */
    public function getLibelleCritere1() {
        return $this->libelleCritere1;
    }

    /**
     * Get the niveau noeud.
     *
     * @return int Returns the niveau noeud.
     */
    public function getNiveauNoeud() {
        return $this->niveauNoeud;
    }

    /**
     * Get the noeud local.
     *
     * @return bool Returns the noeud local.
     */
    public function getNoeudLocal() {
        return $this->noeudLocal;
    }

    /**
     * Get the note objectif.
     *
     * @return float Returns the note objectif.
     */
    public function getNoteObjectif() {
        return $this->noteObjectif;
    }

    /**
     * Get the numero noeud.
     *
     * @return int Returns the numero noeud.
     */
    public function getNumeroNoeud() {
        return $this->numeroNoeud;
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
     * Get the uniq id blocage.
     *
     * @return string Returns the uniq id blocage.
     */
    public function getUniqIdBlocage() {
        return $this->uniqIdBlocage;
    }

    /**
     * Get the uniq id noeud.
     *
     * @return string Returns the uniq id noeud.
     */
    public function getUniqIdNoeud() {
        return $this->uniqIdNoeud;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code critere1.
     *
     * @param string $codeCritere1 The code critere1.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCodeCritere1($codeCritere1) {
        $this->codeCritere1 = $codeCritere1;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float $coefficient The coefficient.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime|null $dateTransfert The date transfert.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setDateTransfert(DateTime $dateTransfert = null) {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the famille elements.
     *
     * @param string $familleElements The famille elements.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setFamilleElements($familleElements) {
        $this->familleElements = $familleElements;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the libelle critere1.
     *
     * @param string $libelleCritere1 The libelle critere1.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setLibelleCritere1($libelleCritere1) {
        $this->libelleCritere1 = $libelleCritere1;
        return $this;
    }

    /**
     * Set the niveau noeud.
     *
     * @param int $niveauNoeud The niveau noeud.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setNiveauNoeud($niveauNoeud) {
        $this->niveauNoeud = $niveauNoeud;
        return $this;
    }

    /**
     * Set the noeud local.
     *
     * @param bool $noeudLocal The noeud local.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setNoeudLocal($noeudLocal) {
        $this->noeudLocal = $noeudLocal;
        return $this;
    }

    /**
     * Set the note objectif.
     *
     * @param float $noteObjectif The note objectif.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setNoteObjectif($noteObjectif) {
        $this->noteObjectif = $noteObjectif;
        return $this;
    }

    /**
     * Set the numero noeud.
     *
     * @param int $numeroNoeud The numero noeud.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setNumeroNoeud($numeroNoeud) {
        $this->numeroNoeud = $numeroNoeud;
        return $this;
    }

    /**
     * Set the poste.
     *
     * @param string $poste The poste.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setPoste($poste) {
        $this->poste = $poste;
        return $this;
    }

    /**
     * Set the uniq id blocage.
     *
     * @param string $uniqIdBlocage The uniq id blocage.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setUniqIdBlocage($uniqIdBlocage) {
        $this->uniqIdBlocage = $uniqIdBlocage;
        return $this;
    }

    /**
     * Set the uniq id noeud.
     *
     * @param string $uniqIdNoeud The uniq id noeud.
     * @return ChantiersDescriptifLocaux Returns this Chantiers descriptif locaux.
     */
    public function setUniqIdNoeud($uniqIdNoeud) {
        $this->uniqIdNoeud = $uniqIdNoeud;
        return $this;
    }
}
