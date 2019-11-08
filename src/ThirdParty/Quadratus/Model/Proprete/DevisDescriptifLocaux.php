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
 * Devis descriptif locaux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisDescriptifLocaux {

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
     * Libelle.
     *
     * @var string
     */
    private $libelle;

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
     * Num devis.
     *
     * @var string
     */
    private $numDevis;

    /**
     * Numero noeud.
     *
     * @var int
     */
    private $numeroNoeud;

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
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
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
     * Get the num devis.
     *
     * @return string Returns the num devis.
     */
    public function getNumDevis() {
        return $this->numDevis;
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
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the niveau noeud.
     *
     * @param int $niveauNoeud The niveau noeud.
     */
    public function setNiveauNoeud($niveauNoeud) {
        $this->niveauNoeud = $niveauNoeud;
        return $this;
    }

    /**
     * Set the noeud local.
     *
     * @param bool $noeudLocal The noeud local.
     */
    public function setNoeudLocal($noeudLocal) {
        $this->noeudLocal = $noeudLocal;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the numero noeud.
     *
     * @param int $numeroNoeud The numero noeud.
     */
    public function setNumeroNoeud($numeroNoeud) {
        $this->numeroNoeud = $numeroNoeud;
        return $this;
    }

    /**
     * Set the uniq id noeud.
     *
     * @param string $uniqIdNoeud The uniq id noeud.
     */
    public function setUniqIdNoeud($uniqIdNoeud) {
        $this->uniqIdNoeud = $uniqIdNoeud;
        return $this;
    }
}
