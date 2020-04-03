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

use DateTime;

/**
 * Lignes profil.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesProfil {

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Code profil.
     *
     * @var string
     */
    private $codeProfil;

    /**
     * Deb per application.
     *
     * @var DateTime|null
     */
    private $debPerApplication;

    /**
     * Fin per application.
     *
     * @var DateTime|null
     */
    private $finPerApplication;

    /**
     * Freq1.
     *
     * @var string
     */
    private $freq1;

    /**
     * Freq10.
     *
     * @var string
     */
    private $freq10;

    /**
     * Freq11.
     *
     * @var string
     */
    private $freq11;

    /**
     * Freq12.
     *
     * @var string
     */
    private $freq12;

    /**
     * Freq2.
     *
     * @var string
     */
    private $freq2;

    /**
     * Freq3.
     *
     * @var string
     */
    private $freq3;

    /**
     * Freq4.
     *
     * @var string
     */
    private $freq4;

    /**
     * Freq5.
     *
     * @var string
     */
    private $freq5;

    /**
     * Freq6.
     *
     * @var string
     */
    private $freq6;

    /**
     * Freq7.
     *
     * @var string
     */
    private $freq7;

    /**
     * Freq8.
     *
     * @var string
     */
    private $freq8;

    /**
     * Freq9.
     *
     * @var string
     */
    private $freq9;

    /**
     * Num ligne profil.
     *
     * @var int
     */
    private $numLigneProfil;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code profil.
     *
     * @return string Returns the code profil.
     */
    public function getCodeProfil() {
        return $this->codeProfil;
    }

    /**
     * Get the deb per application.
     *
     * @return DateTime|null Returns the deb per application.
     */
    public function getDebPerApplication() {
        return $this->debPerApplication;
    }

    /**
     * Get the fin per application.
     *
     * @return DateTime|null Returns the fin per application.
     */
    public function getFinPerApplication() {
        return $this->finPerApplication;
    }

    /**
     * Get the freq1.
     *
     * @return string Returns the freq1.
     */
    public function getFreq1() {
        return $this->freq1;
    }

    /**
     * Get the freq10.
     *
     * @return string Returns the freq10.
     */
    public function getFreq10() {
        return $this->freq10;
    }

    /**
     * Get the freq11.
     *
     * @return string Returns the freq11.
     */
    public function getFreq11() {
        return $this->freq11;
    }

    /**
     * Get the freq12.
     *
     * @return string Returns the freq12.
     */
    public function getFreq12() {
        return $this->freq12;
    }

    /**
     * Get the freq2.
     *
     * @return string Returns the freq2.
     */
    public function getFreq2() {
        return $this->freq2;
    }

    /**
     * Get the freq3.
     *
     * @return string Returns the freq3.
     */
    public function getFreq3() {
        return $this->freq3;
    }

    /**
     * Get the freq4.
     *
     * @return string Returns the freq4.
     */
    public function getFreq4() {
        return $this->freq4;
    }

    /**
     * Get the freq5.
     *
     * @return string Returns the freq5.
     */
    public function getFreq5() {
        return $this->freq5;
    }

    /**
     * Get the freq6.
     *
     * @return string Returns the freq6.
     */
    public function getFreq6() {
        return $this->freq6;
    }

    /**
     * Get the freq7.
     *
     * @return string Returns the freq7.
     */
    public function getFreq7() {
        return $this->freq7;
    }

    /**
     * Get the freq8.
     *
     * @return string Returns the freq8.
     */
    public function getFreq8() {
        return $this->freq8;
    }

    /**
     * Get the freq9.
     *
     * @return string Returns the freq9.
     */
    public function getFreq9() {
        return $this->freq9;
    }

    /**
     * Get the num ligne profil.
     *
     * @return int Returns the num ligne profil.
     */
    public function getNumLigneProfil() {
        return $this->numLigneProfil;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code profil.
     *
     * @param string $codeProfil The code profil.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setCodeProfil($codeProfil) {
        $this->codeProfil = $codeProfil;
        return $this;
    }

    /**
     * Set the deb per application.
     *
     * @param DateTime|null $debPerApplication The deb per application.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setDebPerApplication(DateTime $debPerApplication = null) {
        $this->debPerApplication = $debPerApplication;
        return $this;
    }

    /**
     * Set the fin per application.
     *
     * @param DateTime|null $finPerApplication The fin per application.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFinPerApplication(DateTime $finPerApplication = null) {
        $this->finPerApplication = $finPerApplication;
        return $this;
    }

    /**
     * Set the freq1.
     *
     * @param string $freq1 The freq1.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq1($freq1) {
        $this->freq1 = $freq1;
        return $this;
    }

    /**
     * Set the freq10.
     *
     * @param string $freq10 The freq10.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq10($freq10) {
        $this->freq10 = $freq10;
        return $this;
    }

    /**
     * Set the freq11.
     *
     * @param string $freq11 The freq11.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq11($freq11) {
        $this->freq11 = $freq11;
        return $this;
    }

    /**
     * Set the freq12.
     *
     * @param string $freq12 The freq12.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq12($freq12) {
        $this->freq12 = $freq12;
        return $this;
    }

    /**
     * Set the freq2.
     *
     * @param string $freq2 The freq2.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq2($freq2) {
        $this->freq2 = $freq2;
        return $this;
    }

    /**
     * Set the freq3.
     *
     * @param string $freq3 The freq3.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq3($freq3) {
        $this->freq3 = $freq3;
        return $this;
    }

    /**
     * Set the freq4.
     *
     * @param string $freq4 The freq4.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq4($freq4) {
        $this->freq4 = $freq4;
        return $this;
    }

    /**
     * Set the freq5.
     *
     * @param string $freq5 The freq5.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq5($freq5) {
        $this->freq5 = $freq5;
        return $this;
    }

    /**
     * Set the freq6.
     *
     * @param string $freq6 The freq6.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq6($freq6) {
        $this->freq6 = $freq6;
        return $this;
    }

    /**
     * Set the freq7.
     *
     * @param string $freq7 The freq7.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq7($freq7) {
        $this->freq7 = $freq7;
        return $this;
    }

    /**
     * Set the freq8.
     *
     * @param string $freq8 The freq8.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq8($freq8) {
        $this->freq8 = $freq8;
        return $this;
    }

    /**
     * Set the freq9.
     *
     * @param string $freq9 The freq9.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq9($freq9) {
        $this->freq9 = $freq9;
        return $this;
    }

    /**
     * Set the num ligne profil.
     *
     * @param int $numLigneProfil The num ligne profil.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setNumLigneProfil($numLigneProfil) {
        $this->numLigneProfil = $numLigneProfil;
        return $this;
    }
}
