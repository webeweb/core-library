<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Controle t v a model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ControleTVA {

    /**
     * Code calc.
     *
     * @var string
     */
    private $codeCalc;

    /**
     * Code t v a.
     *
     * @var float
     */
    private $codeTVA;

    /**
     * Colonne taux.
     *
     * @var int
     */
    private $colonneTaux;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Mtt taux.
     *
     * @var float
     */
    private $mttTaux;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Racine cpt.
     *
     * @var string
     */
    private $racineCpt;

    /**
     * Saisie manuelle.
     *
     * @var bool
     */
    private $saisieManuelle;

    /**
     * Type controle.
     *
     * @var string
     */
    private $typeControle;

    /**
     * Type ligne.
     *
     * @var string
     */
    private $typeLigne;

    /**
     * Valeur taux.
     *
     * @var float
     */
    private $valeurTaux;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code calc.
     *
     * @return string Returns the code calc.
     */
    public function getCodeCalc() {
        return $this->codeCalc;
    }

    /**
     * Get the code t v a.
     *
     * @return float Returns the code t v a.
     */
    public function getCodeTVA() {
        return $this->codeTVA;
    }

    /**
     * Get the colonne taux.
     *
     * @return int Returns the colonne taux.
     */
    public function getColonneTaux() {
        return $this->colonneTaux;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the mtt taux.
     *
     * @return float Returns the mtt taux.
     */
    public function getMttTaux() {
        return $this->mttTaux;
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
     * Get the racine cpt.
     *
     * @return string Returns the racine cpt.
     */
    public function getRacineCpt() {
        return $this->racineCpt;
    }

    /**
     * Get the saisie manuelle.
     *
     * @return bool Returns the saisie manuelle.
     */
    public function getSaisieManuelle() {
        return $this->saisieManuelle;
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
     * Get the type ligne.
     *
     * @return string Returns the type ligne.
     */
    public function getTypeLigne() {
        return $this->typeLigne;
    }

    /**
     * Get the valeur taux.
     *
     * @return float Returns the valeur taux.
     */
    public function getValeurTaux() {
        return $this->valeurTaux;
    }

    /**
     * Set the code calc.
     *
     * @param string $codeCalc The code calc.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setCodeCalc($codeCalc) {
        $this->codeCalc = $codeCalc;
        return $this;
    }

    /**
     * Set the code t v a.
     *
     * @param float $codeTVA The code t v a.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setCodeTVA($codeTVA) {
        $this->codeTVA = $codeTVA;
        return $this;
    }

    /**
     * Set the colonne taux.
     *
     * @param int $colonneTaux The colonne taux.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setColonneTaux($colonneTaux) {
        $this->colonneTaux = $colonneTaux;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the mtt taux.
     *
     * @param float $mttTaux The mtt taux.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setMttTaux($mttTaux) {
        $this->mttTaux = $mttTaux;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the racine cpt.
     *
     * @param string $racineCpt The racine cpt.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setRacineCpt($racineCpt) {
        $this->racineCpt = $racineCpt;
        return $this;
    }

    /**
     * Set the saisie manuelle.
     *
     * @param bool $saisieManuelle The saisie manuelle.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setSaisieManuelle($saisieManuelle) {
        $this->saisieManuelle = $saisieManuelle;
        return $this;
    }

    /**
     * Set the type controle.
     *
     * @param string $typeControle The type controle.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setTypeControle($typeControle) {
        $this->typeControle = $typeControle;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string $typeLigne The type ligne.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setTypeLigne($typeLigne) {
        $this->typeLigne = $typeLigne;
        return $this;
    }

    /**
     * Set the valeur taux.
     *
     * @param float $valeurTaux The valeur taux.
     * @return ControleTVA Returns this controle t v a.
     */
    public function setValeurTaux($valeurTaux) {
        $this->valeurTaux = $valeurTaux;
        return $this;
    }
}
