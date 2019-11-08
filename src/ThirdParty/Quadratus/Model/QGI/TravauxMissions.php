<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Travaux missions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TravauxMissions {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Code travail.
     *
     * @var string
     */
    private $codeTravail;

    /**
     * Declaration a rediger.
     *
     * @var bool
     */
    private $declarationARediger;

    /**
     * Frequence.
     *
     * @var string
     */
    private $frequence;

    /**
     * Jour.
     *
     * @var int
     */
    private $jour;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Missions.
     *
     * @var string
     */
    private $missions;

    /**
     * Nb uo.
     *
     * @var float
     */
    private $nbUo;

    /**
     * Ne pas editer.
     *
     * @var bool
     */
    private $nePasEditer;

    /**
     * Niveau.
     *
     * @var int
     */
    private $niveau;

    /**
     * Realise par.
     *
     * @var string
     */
    private $realisePar;

    /**
     * Type affectation.
     *
     * @var string
     */
    private $typeAffectation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
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
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the code travail.
     *
     * @return string Returns the code travail.
     */
    public function getCodeTravail() {
        return $this->codeTravail;
    }

    /**
     * Get the declaration a rediger.
     *
     * @return bool Returns the declaration a rediger.
     */
    public function getDeclarationARediger() {
        return $this->declarationARediger;
    }

    /**
     * Get the frequence.
     *
     * @return string Returns the frequence.
     */
    public function getFrequence() {
        return $this->frequence;
    }

    /**
     * Get the jour.
     *
     * @return int Returns the jour.
     */
    public function getJour() {
        return $this->jour;
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
     * Get the missions.
     *
     * @return string Returns the missions.
     */
    public function getMissions() {
        return $this->missions;
    }

    /**
     * Get the nb uo.
     *
     * @return float Returns the nb uo.
     */
    public function getNbUo() {
        return $this->nbUo;
    }

    /**
     * Get the ne pas editer.
     *
     * @return bool Returns the ne pas editer.
     */
    public function getNePasEditer() {
        return $this->nePasEditer;
    }

    /**
     * Get the niveau.
     *
     * @return int Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the realise par.
     *
     * @return string Returns the realise par.
     */
    public function getRealisePar() {
        return $this->realisePar;
    }

    /**
     * Get the type affectation.
     *
     * @return string Returns the type affectation.
     */
    public function getTypeAffectation() {
        return $this->typeAffectation;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string $codeTravail The code travail.
     */
    public function setCodeTravail($codeTravail) {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the declaration a rediger.
     *
     * @param bool $declarationARediger The declaration a rediger.
     */
    public function setDeclarationARediger($declarationARediger) {
        $this->declarationARediger = $declarationARediger;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string $frequence The frequence.
     */
    public function setFrequence($frequence) {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the jour.
     *
     * @param int $jour The jour.
     */
    public function setJour($jour) {
        $this->jour = $jour;
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
     * Set the missions.
     *
     * @param string $missions The missions.
     */
    public function setMissions($missions) {
        $this->missions = $missions;
        return $this;
    }

    /**
     * Set the nb uo.
     *
     * @param float $nbUo The nb uo.
     */
    public function setNbUo($nbUo) {
        $this->nbUo = $nbUo;
        return $this;
    }

    /**
     * Set the ne pas editer.
     *
     * @param bool $nePasEditer The ne pas editer.
     */
    public function setNePasEditer($nePasEditer) {
        $this->nePasEditer = $nePasEditer;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int $niveau The niveau.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the realise par.
     *
     * @param string $realisePar The realise par.
     */
    public function setRealisePar($realisePar) {
        $this->realisePar = $realisePar;
        return $this;
    }

    /**
     * Set the type affectation.
     *
     * @param string $typeAffectation The type affectation.
     */
    public function setTypeAffectation($typeAffectation) {
        $this->typeAffectation = $typeAffectation;
        return $this;
    }
}
