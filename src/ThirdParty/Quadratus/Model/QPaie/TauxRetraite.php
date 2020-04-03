<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

/**
 * Taux retraite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxRetraite {

    /**
     * Categ cadre.
     *
     * @var bool
     */
    private $categCadre;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Indice contrat.
     *
     * @var int
     */
    private $indiceContrat;

    /**
     * Libelle bul.
     *
     * @var string
     */
    private $libelleBul;

    /**
     * Num dossier.
     *
     * @var string
     */
    private $numDossier;

    /**
     * Sous dossier.
     *
     * @var string
     */
    private $sousDossier;

    /**
     * Taux pat tr a.
     *
     * @var float
     */
    private $tauxPatTrA;

    /**
     * Taux pat tr b.
     *
     * @var float
     */
    private $tauxPatTrB;

    /**
     * Taux pat tr c.
     *
     * @var float
     */
    private $tauxPatTrC;

    /**
     * Taux sal tr a.
     *
     * @var float
     */
    private $tauxSalTrA;

    /**
     * Taux sal tr b.
     *
     * @var float
     */
    private $tauxSalTrB;

    /**
     * Taux sal tr c.
     *
     * @var float
     */
    private $tauxSalTrC;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the categ cadre.
     *
     * @return bool Returns the categ cadre.
     */
    public function getCategCadre() {
        return $this->categCadre;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the indice contrat.
     *
     * @return int Returns the indice contrat.
     */
    public function getIndiceContrat() {
        return $this->indiceContrat;
    }

    /**
     * Get the libelle bul.
     *
     * @return string Returns the libelle bul.
     */
    public function getLibelleBul() {
        return $this->libelleBul;
    }

    /**
     * Get the num dossier.
     *
     * @return string Returns the num dossier.
     */
    public function getNumDossier() {
        return $this->numDossier;
    }

    /**
     * Get the sous dossier.
     *
     * @return string Returns the sous dossier.
     */
    public function getSousDossier() {
        return $this->sousDossier;
    }

    /**
     * Get the taux pat tr a.
     *
     * @return float Returns the taux pat tr a.
     */
    public function getTauxPatTrA() {
        return $this->tauxPatTrA;
    }

    /**
     * Get the taux pat tr b.
     *
     * @return float Returns the taux pat tr b.
     */
    public function getTauxPatTrB() {
        return $this->tauxPatTrB;
    }

    /**
     * Get the taux pat tr c.
     *
     * @return float Returns the taux pat tr c.
     */
    public function getTauxPatTrC() {
        return $this->tauxPatTrC;
    }

    /**
     * Get the taux sal tr a.
     *
     * @return float Returns the taux sal tr a.
     */
    public function getTauxSalTrA() {
        return $this->tauxSalTrA;
    }

    /**
     * Get the taux sal tr b.
     *
     * @return float Returns the taux sal tr b.
     */
    public function getTauxSalTrB() {
        return $this->tauxSalTrB;
    }

    /**
     * Get the taux sal tr c.
     *
     * @return float Returns the taux sal tr c.
     */
    public function getTauxSalTrC() {
        return $this->tauxSalTrC;
    }

    /**
     * Set the categ cadre.
     *
     * @param bool $categCadre The categ cadre.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setCategCadre($categCadre) {
        $this->categCadre = $categCadre;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the indice contrat.
     *
     * @param int $indiceContrat The indice contrat.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setIndiceContrat($indiceContrat) {
        $this->indiceContrat = $indiceContrat;
        return $this;
    }

    /**
     * Set the libelle bul.
     *
     * @param string $libelleBul The libelle bul.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setLibelleBul($libelleBul) {
        $this->libelleBul = $libelleBul;
        return $this;
    }

    /**
     * Set the num dossier.
     *
     * @param string $numDossier The num dossier.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setNumDossier($numDossier) {
        $this->numDossier = $numDossier;
        return $this;
    }

    /**
     * Set the sous dossier.
     *
     * @param string $sousDossier The sous dossier.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setSousDossier($sousDossier) {
        $this->sousDossier = $sousDossier;
        return $this;
    }

    /**
     * Set the taux pat tr a.
     *
     * @param float $tauxPatTrA The taux pat tr a.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxPatTrA($tauxPatTrA) {
        $this->tauxPatTrA = $tauxPatTrA;
        return $this;
    }

    /**
     * Set the taux pat tr b.
     *
     * @param float $tauxPatTrB The taux pat tr b.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxPatTrB($tauxPatTrB) {
        $this->tauxPatTrB = $tauxPatTrB;
        return $this;
    }

    /**
     * Set the taux pat tr c.
     *
     * @param float $tauxPatTrC The taux pat tr c.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxPatTrC($tauxPatTrC) {
        $this->tauxPatTrC = $tauxPatTrC;
        return $this;
    }

    /**
     * Set the taux sal tr a.
     *
     * @param float $tauxSalTrA The taux sal tr a.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxSalTrA($tauxSalTrA) {
        $this->tauxSalTrA = $tauxSalTrA;
        return $this;
    }

    /**
     * Set the taux sal tr b.
     *
     * @param float $tauxSalTrB The taux sal tr b.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxSalTrB($tauxSalTrB) {
        $this->tauxSalTrB = $tauxSalTrB;
        return $this;
    }

    /**
     * Set the taux sal tr c.
     *
     * @param float $tauxSalTrC The taux sal tr c.
     * @return TauxRetraite Returns this Taux retraite.
     */
    public function setTauxSalTrC($tauxSalTrC) {
        $this->tauxSalTrC = $tauxSalTrC;
        return $this;
    }
}
