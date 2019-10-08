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
 * Budget lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class BudgetLignes {

    /**
     * Centre.
     *
     * @var string
     */
    private $centre;

    /**
     * Code budget.
     *
     * @var string
     */
    private $codeBudget;

    /**
     * Coef.
     *
     * @var float
     */
    private $coef;

    /**
     * Col saisie.
     *
     * @var string
     */
    private $colSaisie;

    /**
     * Commentaires.
     *
     * @var string
     */
    private $commentaires;

    /**
     * Compte.
     *
     * @var string
     */
    private $compte;

    /**
     * M t1.
     *
     * @var float
     */
    private $mT1;

    /**
     * M t10.
     *
     * @var float
     */
    private $mT10;

    /**
     * M t11.
     *
     * @var float
     */
    private $mT11;

    /**
     * M t12.
     *
     * @var float
     */
    private $mT12;

    /**
     * M t13.
     *
     * @var float
     */
    private $mT13;

    /**
     * M t14.
     *
     * @var float
     */
    private $mT14;

    /**
     * M t15.
     *
     * @var float
     */
    private $mT15;

    /**
     * M t16.
     *
     * @var float
     */
    private $mT16;

    /**
     * M t17.
     *
     * @var float
     */
    private $mT17;

    /**
     * M t18.
     *
     * @var float
     */
    private $mT18;

    /**
     * M t19.
     *
     * @var float
     */
    private $mT19;

    /**
     * M t2.
     *
     * @var float
     */
    private $mT2;

    /**
     * M t20.
     *
     * @var float
     */
    private $mT20;

    /**
     * M t21.
     *
     * @var float
     */
    private $mT21;

    /**
     * M t22.
     *
     * @var float
     */
    private $mT22;

    /**
     * M t23.
     *
     * @var float
     */
    private $mT23;

    /**
     * M t24.
     *
     * @var float
     */
    private $mT24;

    /**
     * M t3.
     *
     * @var float
     */
    private $mT3;

    /**
     * M t4.
     *
     * @var float
     */
    private $mT4;

    /**
     * M t5.
     *
     * @var float
     */
    private $mT5;

    /**
     * M t6.
     *
     * @var float
     */
    private $mT6;

    /**
     * M t7.
     *
     * @var float
     */
    private $mT7;

    /**
     * M t8.
     *
     * @var float
     */
    private $mT8;

    /**
     * M t9.
     *
     * @var float
     */
    private $mT9;

    /**
     * Nature.
     *
     * @var string
     */
    private $nature;

    /**
     * Ref image.
     *
     * @var string
     */
    private $refImage;

    /**
     * Type saisie.
     *
     * @var string
     */
    private $typeSaisie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the centre.
     *
     * @return string Returns the centre.
     */
    public function getCentre() {
        return $this->centre;
    }

    /**
     * Get the code budget.
     *
     * @return string Returns the code budget.
     */
    public function getCodeBudget() {
        return $this->codeBudget;
    }

    /**
     * Get the coef.
     *
     * @return float Returns the coef.
     */
    public function getCoef() {
        return $this->coef;
    }

    /**
     * Get the col saisie.
     *
     * @return string Returns the col saisie.
     */
    public function getColSaisie() {
        return $this->colSaisie;
    }

    /**
     * Get the commentaires.
     *
     * @return string Returns the commentaires.
     */
    public function getCommentaires() {
        return $this->commentaires;
    }

    /**
     * Get the compte.
     *
     * @return string Returns the compte.
     */
    public function getCompte() {
        return $this->compte;
    }

    /**
     * Get the m t1.
     *
     * @return float Returns the m t1.
     */
    public function getMT1() {
        return $this->mT1;
    }

    /**
     * Get the m t10.
     *
     * @return float Returns the m t10.
     */
    public function getMT10() {
        return $this->mT10;
    }

    /**
     * Get the m t11.
     *
     * @return float Returns the m t11.
     */
    public function getMT11() {
        return $this->mT11;
    }

    /**
     * Get the m t12.
     *
     * @return float Returns the m t12.
     */
    public function getMT12() {
        return $this->mT12;
    }

    /**
     * Get the m t13.
     *
     * @return float Returns the m t13.
     */
    public function getMT13() {
        return $this->mT13;
    }

    /**
     * Get the m t14.
     *
     * @return float Returns the m t14.
     */
    public function getMT14() {
        return $this->mT14;
    }

    /**
     * Get the m t15.
     *
     * @return float Returns the m t15.
     */
    public function getMT15() {
        return $this->mT15;
    }

    /**
     * Get the m t16.
     *
     * @return float Returns the m t16.
     */
    public function getMT16() {
        return $this->mT16;
    }

    /**
     * Get the m t17.
     *
     * @return float Returns the m t17.
     */
    public function getMT17() {
        return $this->mT17;
    }

    /**
     * Get the m t18.
     *
     * @return float Returns the m t18.
     */
    public function getMT18() {
        return $this->mT18;
    }

    /**
     * Get the m t19.
     *
     * @return float Returns the m t19.
     */
    public function getMT19() {
        return $this->mT19;
    }

    /**
     * Get the m t2.
     *
     * @return float Returns the m t2.
     */
    public function getMT2() {
        return $this->mT2;
    }

    /**
     * Get the m t20.
     *
     * @return float Returns the m t20.
     */
    public function getMT20() {
        return $this->mT20;
    }

    /**
     * Get the m t21.
     *
     * @return float Returns the m t21.
     */
    public function getMT21() {
        return $this->mT21;
    }

    /**
     * Get the m t22.
     *
     * @return float Returns the m t22.
     */
    public function getMT22() {
        return $this->mT22;
    }

    /**
     * Get the m t23.
     *
     * @return float Returns the m t23.
     */
    public function getMT23() {
        return $this->mT23;
    }

    /**
     * Get the m t24.
     *
     * @return float Returns the m t24.
     */
    public function getMT24() {
        return $this->mT24;
    }

    /**
     * Get the m t3.
     *
     * @return float Returns the m t3.
     */
    public function getMT3() {
        return $this->mT3;
    }

    /**
     * Get the m t4.
     *
     * @return float Returns the m t4.
     */
    public function getMT4() {
        return $this->mT4;
    }

    /**
     * Get the m t5.
     *
     * @return float Returns the m t5.
     */
    public function getMT5() {
        return $this->mT5;
    }

    /**
     * Get the m t6.
     *
     * @return float Returns the m t6.
     */
    public function getMT6() {
        return $this->mT6;
    }

    /**
     * Get the m t7.
     *
     * @return float Returns the m t7.
     */
    public function getMT7() {
        return $this->mT7;
    }

    /**
     * Get the m t8.
     *
     * @return float Returns the m t8.
     */
    public function getMT8() {
        return $this->mT8;
    }

    /**
     * Get the m t9.
     *
     * @return float Returns the m t9.
     */
    public function getMT9() {
        return $this->mT9;
    }

    /**
     * Get the nature.
     *
     * @return string Returns the nature.
     */
    public function getNature() {
        return $this->nature;
    }

    /**
     * Get the ref image.
     *
     * @return string Returns the ref image.
     */
    public function getRefImage() {
        return $this->refImage;
    }

    /**
     * Get the type saisie.
     *
     * @return string Returns the type saisie.
     */
    public function getTypeSaisie() {
        return $this->typeSaisie;
    }

    /**
     * Set the centre.
     *
     * @param string $centre The centre.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setCentre($centre) {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the code budget.
     *
     * @param string $codeBudget The code budget.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setCodeBudget($codeBudget) {
        $this->codeBudget = $codeBudget;
        return $this;
    }

    /**
     * Set the coef.
     *
     * @param float $coef The coef.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setCoef($coef) {
        $this->coef = $coef;
        return $this;
    }

    /**
     * Set the col saisie.
     *
     * @param string $colSaisie The col saisie.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setColSaisie($colSaisie) {
        $this->colSaisie = $colSaisie;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string $commentaires The commentaires.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setCommentaires($commentaires) {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the compte.
     *
     * @param string $compte The compte.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setCompte($compte) {
        $this->compte = $compte;
        return $this;
    }

    /**
     * Set the m t1.
     *
     * @param float $mT1 The m t1.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT1($mT1) {
        $this->mT1 = $mT1;
        return $this;
    }

    /**
     * Set the m t10.
     *
     * @param float $mT10 The m t10.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT10($mT10) {
        $this->mT10 = $mT10;
        return $this;
    }

    /**
     * Set the m t11.
     *
     * @param float $mT11 The m t11.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT11($mT11) {
        $this->mT11 = $mT11;
        return $this;
    }

    /**
     * Set the m t12.
     *
     * @param float $mT12 The m t12.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT12($mT12) {
        $this->mT12 = $mT12;
        return $this;
    }

    /**
     * Set the m t13.
     *
     * @param float $mT13 The m t13.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT13($mT13) {
        $this->mT13 = $mT13;
        return $this;
    }

    /**
     * Set the m t14.
     *
     * @param float $mT14 The m t14.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT14($mT14) {
        $this->mT14 = $mT14;
        return $this;
    }

    /**
     * Set the m t15.
     *
     * @param float $mT15 The m t15.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT15($mT15) {
        $this->mT15 = $mT15;
        return $this;
    }

    /**
     * Set the m t16.
     *
     * @param float $mT16 The m t16.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT16($mT16) {
        $this->mT16 = $mT16;
        return $this;
    }

    /**
     * Set the m t17.
     *
     * @param float $mT17 The m t17.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT17($mT17) {
        $this->mT17 = $mT17;
        return $this;
    }

    /**
     * Set the m t18.
     *
     * @param float $mT18 The m t18.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT18($mT18) {
        $this->mT18 = $mT18;
        return $this;
    }

    /**
     * Set the m t19.
     *
     * @param float $mT19 The m t19.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT19($mT19) {
        $this->mT19 = $mT19;
        return $this;
    }

    /**
     * Set the m t2.
     *
     * @param float $mT2 The m t2.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT2($mT2) {
        $this->mT2 = $mT2;
        return $this;
    }

    /**
     * Set the m t20.
     *
     * @param float $mT20 The m t20.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT20($mT20) {
        $this->mT20 = $mT20;
        return $this;
    }

    /**
     * Set the m t21.
     *
     * @param float $mT21 The m t21.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT21($mT21) {
        $this->mT21 = $mT21;
        return $this;
    }

    /**
     * Set the m t22.
     *
     * @param float $mT22 The m t22.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT22($mT22) {
        $this->mT22 = $mT22;
        return $this;
    }

    /**
     * Set the m t23.
     *
     * @param float $mT23 The m t23.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT23($mT23) {
        $this->mT23 = $mT23;
        return $this;
    }

    /**
     * Set the m t24.
     *
     * @param float $mT24 The m t24.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT24($mT24) {
        $this->mT24 = $mT24;
        return $this;
    }

    /**
     * Set the m t3.
     *
     * @param float $mT3 The m t3.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT3($mT3) {
        $this->mT3 = $mT3;
        return $this;
    }

    /**
     * Set the m t4.
     *
     * @param float $mT4 The m t4.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT4($mT4) {
        $this->mT4 = $mT4;
        return $this;
    }

    /**
     * Set the m t5.
     *
     * @param float $mT5 The m t5.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT5($mT5) {
        $this->mT5 = $mT5;
        return $this;
    }

    /**
     * Set the m t6.
     *
     * @param float $mT6 The m t6.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT6($mT6) {
        $this->mT6 = $mT6;
        return $this;
    }

    /**
     * Set the m t7.
     *
     * @param float $mT7 The m t7.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT7($mT7) {
        $this->mT7 = $mT7;
        return $this;
    }

    /**
     * Set the m t8.
     *
     * @param float $mT8 The m t8.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT8($mT8) {
        $this->mT8 = $mT8;
        return $this;
    }

    /**
     * Set the m t9.
     *
     * @param float $mT9 The m t9.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setMT9($mT9) {
        $this->mT9 = $mT9;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the type saisie.
     *
     * @param string $typeSaisie The type saisie.
     * @return BudgetLignes Returns this budget lignes.
     */
    public function setTypeSaisie($typeSaisie) {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }
}
