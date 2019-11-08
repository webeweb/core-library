<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Budget lignes.
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
     * Mt1.
     *
     * @var float
     */
    private $mt1;

    /**
     * Mt10.
     *
     * @var float
     */
    private $mt10;

    /**
     * Mt11.
     *
     * @var float
     */
    private $mt11;

    /**
     * Mt12.
     *
     * @var float
     */
    private $mt12;

    /**
     * Mt13.
     *
     * @var float
     */
    private $mt13;

    /**
     * Mt14.
     *
     * @var float
     */
    private $mt14;

    /**
     * Mt15.
     *
     * @var float
     */
    private $mt15;

    /**
     * Mt16.
     *
     * @var float
     */
    private $mt16;

    /**
     * Mt17.
     *
     * @var float
     */
    private $mt17;

    /**
     * Mt18.
     *
     * @var float
     */
    private $mt18;

    /**
     * Mt19.
     *
     * @var float
     */
    private $mt19;

    /**
     * Mt2.
     *
     * @var float
     */
    private $mt2;

    /**
     * Mt20.
     *
     * @var float
     */
    private $mt20;

    /**
     * Mt21.
     *
     * @var float
     */
    private $mt21;

    /**
     * Mt22.
     *
     * @var float
     */
    private $mt22;

    /**
     * Mt23.
     *
     * @var float
     */
    private $mt23;

    /**
     * Mt24.
     *
     * @var float
     */
    private $mt24;

    /**
     * Mt3.
     *
     * @var float
     */
    private $mt3;

    /**
     * Mt4.
     *
     * @var float
     */
    private $mt4;

    /**
     * Mt5.
     *
     * @var float
     */
    private $mt5;

    /**
     * Mt6.
     *
     * @var float
     */
    private $mt6;

    /**
     * Mt7.
     *
     * @var float
     */
    private $mt7;

    /**
     * Mt8.
     *
     * @var float
     */
    private $mt8;

    /**
     * Mt9.
     *
     * @var float
     */
    private $mt9;

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
     * Get the mt1.
     *
     * @return float Returns the mt1.
     */
    public function getMt1() {
        return $this->mt1;
    }

    /**
     * Get the mt10.
     *
     * @return float Returns the mt10.
     */
    public function getMt10() {
        return $this->mt10;
    }

    /**
     * Get the mt11.
     *
     * @return float Returns the mt11.
     */
    public function getMt11() {
        return $this->mt11;
    }

    /**
     * Get the mt12.
     *
     * @return float Returns the mt12.
     */
    public function getMt12() {
        return $this->mt12;
    }

    /**
     * Get the mt13.
     *
     * @return float Returns the mt13.
     */
    public function getMt13() {
        return $this->mt13;
    }

    /**
     * Get the mt14.
     *
     * @return float Returns the mt14.
     */
    public function getMt14() {
        return $this->mt14;
    }

    /**
     * Get the mt15.
     *
     * @return float Returns the mt15.
     */
    public function getMt15() {
        return $this->mt15;
    }

    /**
     * Get the mt16.
     *
     * @return float Returns the mt16.
     */
    public function getMt16() {
        return $this->mt16;
    }

    /**
     * Get the mt17.
     *
     * @return float Returns the mt17.
     */
    public function getMt17() {
        return $this->mt17;
    }

    /**
     * Get the mt18.
     *
     * @return float Returns the mt18.
     */
    public function getMt18() {
        return $this->mt18;
    }

    /**
     * Get the mt19.
     *
     * @return float Returns the mt19.
     */
    public function getMt19() {
        return $this->mt19;
    }

    /**
     * Get the mt2.
     *
     * @return float Returns the mt2.
     */
    public function getMt2() {
        return $this->mt2;
    }

    /**
     * Get the mt20.
     *
     * @return float Returns the mt20.
     */
    public function getMt20() {
        return $this->mt20;
    }

    /**
     * Get the mt21.
     *
     * @return float Returns the mt21.
     */
    public function getMt21() {
        return $this->mt21;
    }

    /**
     * Get the mt22.
     *
     * @return float Returns the mt22.
     */
    public function getMt22() {
        return $this->mt22;
    }

    /**
     * Get the mt23.
     *
     * @return float Returns the mt23.
     */
    public function getMt23() {
        return $this->mt23;
    }

    /**
     * Get the mt24.
     *
     * @return float Returns the mt24.
     */
    public function getMt24() {
        return $this->mt24;
    }

    /**
     * Get the mt3.
     *
     * @return float Returns the mt3.
     */
    public function getMt3() {
        return $this->mt3;
    }

    /**
     * Get the mt4.
     *
     * @return float Returns the mt4.
     */
    public function getMt4() {
        return $this->mt4;
    }

    /**
     * Get the mt5.
     *
     * @return float Returns the mt5.
     */
    public function getMt5() {
        return $this->mt5;
    }

    /**
     * Get the mt6.
     *
     * @return float Returns the mt6.
     */
    public function getMt6() {
        return $this->mt6;
    }

    /**
     * Get the mt7.
     *
     * @return float Returns the mt7.
     */
    public function getMt7() {
        return $this->mt7;
    }

    /**
     * Get the mt8.
     *
     * @return float Returns the mt8.
     */
    public function getMt8() {
        return $this->mt8;
    }

    /**
     * Get the mt9.
     *
     * @return float Returns the mt9.
     */
    public function getMt9() {
        return $this->mt9;
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
     */
    public function setCentre($centre) {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the code budget.
     *
     * @param string $codeBudget The code budget.
     */
    public function setCodeBudget($codeBudget) {
        $this->codeBudget = $codeBudget;
        return $this;
    }

    /**
     * Set the coef.
     *
     * @param float $coef The coef.
     */
    public function setCoef($coef) {
        $this->coef = $coef;
        return $this;
    }

    /**
     * Set the col saisie.
     *
     * @param string $colSaisie The col saisie.
     */
    public function setColSaisie($colSaisie) {
        $this->colSaisie = $colSaisie;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string $commentaires The commentaires.
     */
    public function setCommentaires($commentaires) {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the compte.
     *
     * @param string $compte The compte.
     */
    public function setCompte($compte) {
        $this->compte = $compte;
        return $this;
    }

    /**
     * Set the mt1.
     *
     * @param float $mt1 The mt1.
     */
    public function setMt1($mt1) {
        $this->mt1 = $mt1;
        return $this;
    }

    /**
     * Set the mt10.
     *
     * @param float $mt10 The mt10.
     */
    public function setMt10($mt10) {
        $this->mt10 = $mt10;
        return $this;
    }

    /**
     * Set the mt11.
     *
     * @param float $mt11 The mt11.
     */
    public function setMt11($mt11) {
        $this->mt11 = $mt11;
        return $this;
    }

    /**
     * Set the mt12.
     *
     * @param float $mt12 The mt12.
     */
    public function setMt12($mt12) {
        $this->mt12 = $mt12;
        return $this;
    }

    /**
     * Set the mt13.
     *
     * @param float $mt13 The mt13.
     */
    public function setMt13($mt13) {
        $this->mt13 = $mt13;
        return $this;
    }

    /**
     * Set the mt14.
     *
     * @param float $mt14 The mt14.
     */
    public function setMt14($mt14) {
        $this->mt14 = $mt14;
        return $this;
    }

    /**
     * Set the mt15.
     *
     * @param float $mt15 The mt15.
     */
    public function setMt15($mt15) {
        $this->mt15 = $mt15;
        return $this;
    }

    /**
     * Set the mt16.
     *
     * @param float $mt16 The mt16.
     */
    public function setMt16($mt16) {
        $this->mt16 = $mt16;
        return $this;
    }

    /**
     * Set the mt17.
     *
     * @param float $mt17 The mt17.
     */
    public function setMt17($mt17) {
        $this->mt17 = $mt17;
        return $this;
    }

    /**
     * Set the mt18.
     *
     * @param float $mt18 The mt18.
     */
    public function setMt18($mt18) {
        $this->mt18 = $mt18;
        return $this;
    }

    /**
     * Set the mt19.
     *
     * @param float $mt19 The mt19.
     */
    public function setMt19($mt19) {
        $this->mt19 = $mt19;
        return $this;
    }

    /**
     * Set the mt2.
     *
     * @param float $mt2 The mt2.
     */
    public function setMt2($mt2) {
        $this->mt2 = $mt2;
        return $this;
    }

    /**
     * Set the mt20.
     *
     * @param float $mt20 The mt20.
     */
    public function setMt20($mt20) {
        $this->mt20 = $mt20;
        return $this;
    }

    /**
     * Set the mt21.
     *
     * @param float $mt21 The mt21.
     */
    public function setMt21($mt21) {
        $this->mt21 = $mt21;
        return $this;
    }

    /**
     * Set the mt22.
     *
     * @param float $mt22 The mt22.
     */
    public function setMt22($mt22) {
        $this->mt22 = $mt22;
        return $this;
    }

    /**
     * Set the mt23.
     *
     * @param float $mt23 The mt23.
     */
    public function setMt23($mt23) {
        $this->mt23 = $mt23;
        return $this;
    }

    /**
     * Set the mt24.
     *
     * @param float $mt24 The mt24.
     */
    public function setMt24($mt24) {
        $this->mt24 = $mt24;
        return $this;
    }

    /**
     * Set the mt3.
     *
     * @param float $mt3 The mt3.
     */
    public function setMt3($mt3) {
        $this->mt3 = $mt3;
        return $this;
    }

    /**
     * Set the mt4.
     *
     * @param float $mt4 The mt4.
     */
    public function setMt4($mt4) {
        $this->mt4 = $mt4;
        return $this;
    }

    /**
     * Set the mt5.
     *
     * @param float $mt5 The mt5.
     */
    public function setMt5($mt5) {
        $this->mt5 = $mt5;
        return $this;
    }

    /**
     * Set the mt6.
     *
     * @param float $mt6 The mt6.
     */
    public function setMt6($mt6) {
        $this->mt6 = $mt6;
        return $this;
    }

    /**
     * Set the mt7.
     *
     * @param float $mt7 The mt7.
     */
    public function setMt7($mt7) {
        $this->mt7 = $mt7;
        return $this;
    }

    /**
     * Set the mt8.
     *
     * @param float $mt8 The mt8.
     */
    public function setMt8($mt8) {
        $this->mt8 = $mt8;
        return $this;
    }

    /**
     * Set the mt9.
     *
     * @param float $mt9 The mt9.
     */
    public function setMt9($mt9) {
        $this->mt9 = $mt9;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the type saisie.
     *
     * @param string $typeSaisie The type saisie.
     */
    public function setTypeSaisie($typeSaisie) {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }
}
