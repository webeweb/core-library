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
 * Fiches controles lignes elements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FichesControlesLignesElements {

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
     * Code element.
     *
     * @var string
     */
    private $codeElement;

    /**
     * Coefficient.
     *
     * @var float
     */
    private $coefficient;

    /**
     * Mise en conformite.
     *
     * @var DateTime|null
     */
    private $miseEnConformite;

    /**
     * Niveau noeud.
     *
     * @var int
     */
    private $niveauNoeud;

    /**
     * Note.
     *
     * @var int
     */
    private $note;

    /**
     * Numero fiche.
     *
     * @var int
     */
    private $numeroFiche;

    /**
     * Numero noeud.
     *
     * @var int
     */
    private $numeroNoeud;

    /**
     * Type element.
     *
     * @var string
     */
    private $typeElement;

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
     * Get the code element.
     *
     * @return string Returns the code element.
     */
    public function getCodeElement() {
        return $this->codeElement;
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
     * Get the mise en conformite.
     *
     * @return DateTime|null Returns the mise en conformite.
     */
    public function getMiseEnConformite() {
        return $this->miseEnConformite;
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
     * Get the note.
     *
     * @return int Returns the note.
     */
    public function getNote() {
        return $this->note;
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
     * Get the numero noeud.
     *
     * @return int Returns the numero noeud.
     */
    public function getNumeroNoeud() {
        return $this->numeroNoeud;
    }

    /**
     * Get the type element.
     *
     * @return string Returns the type element.
     */
    public function getTypeElement() {
        return $this->typeElement;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code element.
     *
     * @param string $codeElement The code element.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setCodeElement($codeElement) {
        $this->codeElement = $codeElement;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float $coefficient The coefficient.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the mise en conformite.
     *
     * @param DateTime|null $miseEnConformite The mise en conformite.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setMiseEnConformite(DateTime $miseEnConformite = null) {
        $this->miseEnConformite = $miseEnConformite;
        return $this;
    }

    /**
     * Set the niveau noeud.
     *
     * @param int $niveauNoeud The niveau noeud.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setNiveauNoeud($niveauNoeud) {
        $this->niveauNoeud = $niveauNoeud;
        return $this;
    }

    /**
     * Set the note.
     *
     * @param int $note The note.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setNote($note) {
        $this->note = $note;
        return $this;
    }

    /**
     * Set the numero fiche.
     *
     * @param int $numeroFiche The numero fiche.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setNumeroFiche($numeroFiche) {
        $this->numeroFiche = $numeroFiche;
        return $this;
    }

    /**
     * Set the numero noeud.
     *
     * @param int $numeroNoeud The numero noeud.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setNumeroNoeud($numeroNoeud) {
        $this->numeroNoeud = $numeroNoeud;
        return $this;
    }

    /**
     * Set the type element.
     *
     * @param string $typeElement The type element.
     * @return FichesControlesLignesElements Returns this Fiches controles lignes elements.
     */
    public function setTypeElement($typeElement) {
        $this->typeElement = $typeElement;
        return $this;
    }
}
