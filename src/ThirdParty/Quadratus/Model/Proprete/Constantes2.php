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
 * Constantes2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Constantes2 {

    /**
     * Format duree.
     *
     * @var bool
     */
    private $formatDuree;

    /**
     * Jours c p a deduire.
     *
     * @var bool
     */
    private $joursCPADeduire;

    /**
     * Nb decimales duree.
     *
     * @var string
     */
    private $nbDecimalesDuree;

    /**
     * Num critere b t bool1.
     *
     * @var string
     */
    private $numCritereBTBool1;

    /**
     * Num critere b t bool2.
     *
     * @var string
     */
    private $numCritereBTBool2;

    /**
     * Num critere b t byte1.
     *
     * @var string
     */
    private $numCritereBTByte1;

    /**
     * Num critere b t lst1.
     *
     * @var string
     */
    private $numCritereBTLst1;

    /**
     * Num critere b t lst2.
     *
     * @var string
     */
    private $numCritereBTLst2;

    /**
     * Num critere b t txt1.
     *
     * @var string
     */
    private $numCritereBTTxt1;

    /**
     * Num critere b t txt2.
     *
     * @var string
     */
    private $numCritereBTTxt2;

    /**
     * Num critere couleur b t.
     *
     * @var string
     */
    private $numCritereCouleurBT;

    /**
     * Num critere d a txt1.
     *
     * @var string
     */
    private $numCritereDATxt1;

    /**
     * Num critere recla lst1.
     *
     * @var string
     */
    private $numCritereReclaLst1;

    /**
     * Num critere recla lst2.
     *
     * @var string
     */
    private $numCritereReclaLst2;

    /**
     * Publier photo web.
     *
     * @var bool
     */
    private $publierPhotoWeb;

    /**
     * Type critere couleur b t.
     *
     * @var string
     */
    private $typeCritereCouleurBT;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the format duree.
     *
     * @return bool Returns the format duree.
     */
    public function getFormatDuree() {
        return $this->formatDuree;
    }

    /**
     * Get the jours c p a deduire.
     *
     * @return bool Returns the jours c p a deduire.
     */
    public function getJoursCPADeduire() {
        return $this->joursCPADeduire;
    }

    /**
     * Get the nb decimales duree.
     *
     * @return string Returns the nb decimales duree.
     */
    public function getNbDecimalesDuree() {
        return $this->nbDecimalesDuree;
    }

    /**
     * Get the num critere b t bool1.
     *
     * @return string Returns the num critere b t bool1.
     */
    public function getNumCritereBTBool1() {
        return $this->numCritereBTBool1;
    }

    /**
     * Get the num critere b t bool2.
     *
     * @return string Returns the num critere b t bool2.
     */
    public function getNumCritereBTBool2() {
        return $this->numCritereBTBool2;
    }

    /**
     * Get the num critere b t byte1.
     *
     * @return string Returns the num critere b t byte1.
     */
    public function getNumCritereBTByte1() {
        return $this->numCritereBTByte1;
    }

    /**
     * Get the num critere b t lst1.
     *
     * @return string Returns the num critere b t lst1.
     */
    public function getNumCritereBTLst1() {
        return $this->numCritereBTLst1;
    }

    /**
     * Get the num critere b t lst2.
     *
     * @return string Returns the num critere b t lst2.
     */
    public function getNumCritereBTLst2() {
        return $this->numCritereBTLst2;
    }

    /**
     * Get the num critere b t txt1.
     *
     * @return string Returns the num critere b t txt1.
     */
    public function getNumCritereBTTxt1() {
        return $this->numCritereBTTxt1;
    }

    /**
     * Get the num critere b t txt2.
     *
     * @return string Returns the num critere b t txt2.
     */
    public function getNumCritereBTTxt2() {
        return $this->numCritereBTTxt2;
    }

    /**
     * Get the num critere couleur b t.
     *
     * @return string Returns the num critere couleur b t.
     */
    public function getNumCritereCouleurBT() {
        return $this->numCritereCouleurBT;
    }

    /**
     * Get the num critere d a txt1.
     *
     * @return string Returns the num critere d a txt1.
     */
    public function getNumCritereDATxt1() {
        return $this->numCritereDATxt1;
    }

    /**
     * Get the num critere recla lst1.
     *
     * @return string Returns the num critere recla lst1.
     */
    public function getNumCritereReclaLst1() {
        return $this->numCritereReclaLst1;
    }

    /**
     * Get the num critere recla lst2.
     *
     * @return string Returns the num critere recla lst2.
     */
    public function getNumCritereReclaLst2() {
        return $this->numCritereReclaLst2;
    }

    /**
     * Get the publier photo web.
     *
     * @return bool Returns the publier photo web.
     */
    public function getPublierPhotoWeb() {
        return $this->publierPhotoWeb;
    }

    /**
     * Get the type critere couleur b t.
     *
     * @return string Returns the type critere couleur b t.
     */
    public function getTypeCritereCouleurBT() {
        return $this->typeCritereCouleurBT;
    }

    /**
     * Set the format duree.
     *
     * @param bool $formatDuree The format duree.
     * @return Constantes2 Returns this constantes2.
     */
    public function setFormatDuree($formatDuree) {
        $this->formatDuree = $formatDuree;
        return $this;
    }

    /**
     * Set the jours c p a deduire.
     *
     * @param bool $joursCPADeduire The jours c p a deduire.
     * @return Constantes2 Returns this constantes2.
     */
    public function setJoursCPADeduire($joursCPADeduire) {
        $this->joursCPADeduire = $joursCPADeduire;
        return $this;
    }

    /**
     * Set the nb decimales duree.
     *
     * @param string $nbDecimalesDuree The nb decimales duree.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNbDecimalesDuree($nbDecimalesDuree) {
        $this->nbDecimalesDuree = $nbDecimalesDuree;
        return $this;
    }

    /**
     * Set the num critere b t bool1.
     *
     * @param string $numCritereBTBool1 The num critere b t bool1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereBTBool1($numCritereBTBool1) {
        $this->numCritereBTBool1 = $numCritereBTBool1;
        return $this;
    }

    /**
     * Set the num critere b t bool2.
     *
     * @param string $numCritereBTBool2 The num critere b t bool2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereBTBool2($numCritereBTBool2) {
        $this->numCritereBTBool2 = $numCritereBTBool2;
        return $this;
    }

    /**
     * Set the num critere b t byte1.
     *
     * @param string $numCritereBTByte1 The num critere b t byte1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereBTByte1($numCritereBTByte1) {
        $this->numCritereBTByte1 = $numCritereBTByte1;
        return $this;
    }

    /**
     * Set the num critere b t lst1.
     *
     * @param string $numCritereBTLst1 The num critere b t lst1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereBTLst1($numCritereBTLst1) {
        $this->numCritereBTLst1 = $numCritereBTLst1;
        return $this;
    }

    /**
     * Set the num critere b t lst2.
     *
     * @param string $numCritereBTLst2 The num critere b t lst2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereBTLst2($numCritereBTLst2) {
        $this->numCritereBTLst2 = $numCritereBTLst2;
        return $this;
    }

    /**
     * Set the num critere b t txt1.
     *
     * @param string $numCritereBTTxt1 The num critere b t txt1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereBTTxt1($numCritereBTTxt1) {
        $this->numCritereBTTxt1 = $numCritereBTTxt1;
        return $this;
    }

    /**
     * Set the num critere b t txt2.
     *
     * @param string $numCritereBTTxt2 The num critere b t txt2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereBTTxt2($numCritereBTTxt2) {
        $this->numCritereBTTxt2 = $numCritereBTTxt2;
        return $this;
    }

    /**
     * Set the num critere couleur b t.
     *
     * @param string $numCritereCouleurBT The num critere couleur b t.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereCouleurBT($numCritereCouleurBT) {
        $this->numCritereCouleurBT = $numCritereCouleurBT;
        return $this;
    }

    /**
     * Set the num critere d a txt1.
     *
     * @param string $numCritereDATxt1 The num critere d a txt1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereDATxt1($numCritereDATxt1) {
        $this->numCritereDATxt1 = $numCritereDATxt1;
        return $this;
    }

    /**
     * Set the num critere recla lst1.
     *
     * @param string $numCritereReclaLst1 The num critere recla lst1.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereReclaLst1($numCritereReclaLst1) {
        $this->numCritereReclaLst1 = $numCritereReclaLst1;
        return $this;
    }

    /**
     * Set the num critere recla lst2.
     *
     * @param string $numCritereReclaLst2 The num critere recla lst2.
     * @return Constantes2 Returns this constantes2.
     */
    public function setNumCritereReclaLst2($numCritereReclaLst2) {
        $this->numCritereReclaLst2 = $numCritereReclaLst2;
        return $this;
    }

    /**
     * Set the publier photo web.
     *
     * @param bool $publierPhotoWeb The publier photo web.
     * @return Constantes2 Returns this constantes2.
     */
    public function setPublierPhotoWeb($publierPhotoWeb) {
        $this->publierPhotoWeb = $publierPhotoWeb;
        return $this;
    }

    /**
     * Set the type critere couleur b t.
     *
     * @param string $typeCritereCouleurBT The type critere couleur b t.
     * @return Constantes2 Returns this constantes2.
     */
    public function setTypeCritereCouleurBT($typeCritereCouleurBT) {
        $this->typeCritereCouleurBT = $typeCritereCouleurBT;
        return $this;
    }
}
