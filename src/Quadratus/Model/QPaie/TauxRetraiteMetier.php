<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

/**
 * Taux retraite metier model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class TauxRetraiteMetier {

    /**
     * Active.
     *
     * @var boolean
     */
    private $active;

    /**
     * Categ salarie.
     *
     * @var int
     */
    private $categSalarie;

    /**
     * Code activite.
     *
     * @var string
     */
    private $codeActivite;

    /**
     * Code ducs.
     *
     * @var string
     */
    private $codeDucs;

    /**
     * Code edition histo.
     *
     * @var string
     */
    private $codeEditionHisto;

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Code metier.
     *
     * @var string
     */
    private $codeMetier;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Compte charge.
     *
     * @var string
     */
    private $compteCharge;

    /**
     * Condition spec.
     *
     * @var string
     */
    private $conditionSpec;

    /**
     * Exclure loi t e p a.
     *
     * @var string
     */
    private $exclureLoiTEPA;

    /**
     * Indice categ.
     *
     * @var int
     */
    private $indiceCateg;

    /**
     * Libelle bul.
     *
     * @var string
     */
    private $libelleBul;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Qualifiant cotis.
     *
     * @var string
     */
    private $qualifiantCotis;

    /**
     * Type libelle.
     *
     * @var int
     */
    private $typeLibelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the active.
     *
     * @return boolean Returns the active.
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Get the categ salarie.
     *
     * @return int Returns the categ salarie.
     */
    public function getCategSalarie() {
        return $this->categSalarie;
    }

    /**
     * Get the code activite.
     *
     * @return string Returns the code activite.
     */
    public function getCodeActivite() {
        return $this->codeActivite;
    }

    /**
     * Get the code ducs.
     *
     * @return string Returns the code ducs.
     */
    public function getCodeDucs() {
        return $this->codeDucs;
    }

    /**
     * Get the code edition histo.
     *
     * @return string Returns the code edition histo.
     */
    public function getCodeEditionHisto() {
        return $this->codeEditionHisto;
    }

    /**
     * Get the code libelle.
     *
     * @return string Returns the code libelle.
     */
    public function getCodeLibelle() {
        return $this->codeLibelle;
    }

    /**
     * Get the code metier.
     *
     * @return string Returns the code metier.
     */
    public function getCodeMetier() {
        return $this->codeMetier;
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
     * Get the compte charge.
     *
     * @return string Returns the compte charge.
     */
    public function getCompteCharge() {
        return $this->compteCharge;
    }

    /**
     * Get the condition spec.
     *
     * @return string Returns the condition spec.
     */
    public function getConditionSpec() {
        return $this->conditionSpec;
    }

    /**
     * Get the exclure loi t e p a.
     *
     * @return string Returns the exclure loi t e p a.
     */
    public function getExclureLoiTEPA() {
        return $this->exclureLoiTEPA;
    }

    /**
     * Get the indice categ.
     *
     * @return int Returns the indice categ.
     */
    public function getIndiceCateg() {
        return $this->indiceCateg;
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
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the qualifiant cotis.
     *
     * @return string Returns the qualifiant cotis.
     */
    public function getQualifiantCotis() {
        return $this->qualifiantCotis;
    }

    /**
     * Get the type libelle.
     *
     * @return int Returns the type libelle.
     */
    public function getTypeLibelle() {
        return $this->typeLibelle;
    }

    /**
     * Set the active.
     *
     * @param boolean $active The active.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param int $categSalarie The categ salarie.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setCategSalarie($categSalarie) {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string $codeActivite The code activite.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setCodeActivite($codeActivite) {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code ducs.
     *
     * @param string $codeDucs The code ducs.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setCodeDucs($codeDucs) {
        $this->codeDucs = $codeDucs;
        return $this;
    }

    /**
     * Set the code edition histo.
     *
     * @param string $codeEditionHisto The code edition histo.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setCodeEditionHisto($codeEditionHisto) {
        $this->codeEditionHisto = $codeEditionHisto;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code metier.
     *
     * @param string $codeMetier The code metier.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setCodeMetier($codeMetier) {
        $this->codeMetier = $codeMetier;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the compte charge.
     *
     * @param string $compteCharge The compte charge.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setCompteCharge($compteCharge) {
        $this->compteCharge = $compteCharge;
        return $this;
    }

    /**
     * Set the condition spec.
     *
     * @param string $conditionSpec The condition spec.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setConditionSpec($conditionSpec) {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }

    /**
     * Set the exclure loi t e p a.
     *
     * @param string $exclureLoiTEPA The exclure loi t e p a.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setExclureLoiTEPA($exclureLoiTEPA) {
        $this->exclureLoiTEPA = $exclureLoiTEPA;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int $indiceCateg The indice categ.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setIndiceCateg($indiceCateg) {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the libelle bul.
     *
     * @param string $libelleBul The libelle bul.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setLibelleBul($libelleBul) {
        $this->libelleBul = $libelleBul;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string $qualifiantCotis The qualifiant cotis.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setQualifiantCotis($qualifiantCotis) {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }

    /**
     * Set the type libelle.
     *
     * @param int $typeLibelle The type libelle.
     * @return TauxRetraiteMetier Returns this taux retraite metier.
     */
    public function setTypeLibelle($typeLibelle) {
        $this->typeLibelle = $typeLibelle;
        return $this;
    }

}
