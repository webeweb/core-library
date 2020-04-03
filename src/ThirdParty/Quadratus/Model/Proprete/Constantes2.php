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
 * Constantes2.
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
     * Jours cpa deduire.
     *
     * @var bool
     */
    private $joursCpaDeduire;

    /**
     * Nb decimales duree.
     *
     * @var string
     */
    private $nbDecimalesDuree;

    /**
     * Num critere bt bool1.
     *
     * @var string
     */
    private $numCritereBtBool1;

    /**
     * Num critere bt bool2.
     *
     * @var string
     */
    private $numCritereBtBool2;

    /**
     * Num critere bt byte1.
     *
     * @var string
     */
    private $numCritereBtByte1;

    /**
     * Num critere bt lst1.
     *
     * @var string
     */
    private $numCritereBtLst1;

    /**
     * Num critere bt lst2.
     *
     * @var string
     */
    private $numCritereBtLst2;

    /**
     * Num critere bt txt1.
     *
     * @var string
     */
    private $numCritereBtTxt1;

    /**
     * Num critere bt txt2.
     *
     * @var string
     */
    private $numCritereBtTxt2;

    /**
     * Num critere couleur bt.
     *
     * @var string
     */
    private $numCritereCouleurBt;

    /**
     * Num critere da txt1.
     *
     * @var string
     */
    private $numCritereDaTxt1;

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
     * Type critere couleur bt.
     *
     * @var string
     */
    private $typeCritereCouleurBt;

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
     * Get the jours cpa deduire.
     *
     * @return bool Returns the jours cpa deduire.
     */
    public function getJoursCpaDeduire() {
        return $this->joursCpaDeduire;
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
     * Get the num critere bt bool1.
     *
     * @return string Returns the num critere bt bool1.
     */
    public function getNumCritereBtBool1() {
        return $this->numCritereBtBool1;
    }

    /**
     * Get the num critere bt bool2.
     *
     * @return string Returns the num critere bt bool2.
     */
    public function getNumCritereBtBool2() {
        return $this->numCritereBtBool2;
    }

    /**
     * Get the num critere bt byte1.
     *
     * @return string Returns the num critere bt byte1.
     */
    public function getNumCritereBtByte1() {
        return $this->numCritereBtByte1;
    }

    /**
     * Get the num critere bt lst1.
     *
     * @return string Returns the num critere bt lst1.
     */
    public function getNumCritereBtLst1() {
        return $this->numCritereBtLst1;
    }

    /**
     * Get the num critere bt lst2.
     *
     * @return string Returns the num critere bt lst2.
     */
    public function getNumCritereBtLst2() {
        return $this->numCritereBtLst2;
    }

    /**
     * Get the num critere bt txt1.
     *
     * @return string Returns the num critere bt txt1.
     */
    public function getNumCritereBtTxt1() {
        return $this->numCritereBtTxt1;
    }

    /**
     * Get the num critere bt txt2.
     *
     * @return string Returns the num critere bt txt2.
     */
    public function getNumCritereBtTxt2() {
        return $this->numCritereBtTxt2;
    }

    /**
     * Get the num critere couleur bt.
     *
     * @return string Returns the num critere couleur bt.
     */
    public function getNumCritereCouleurBt() {
        return $this->numCritereCouleurBt;
    }

    /**
     * Get the num critere da txt1.
     *
     * @return string Returns the num critere da txt1.
     */
    public function getNumCritereDaTxt1() {
        return $this->numCritereDaTxt1;
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
     * Get the type critere couleur bt.
     *
     * @return string Returns the type critere couleur bt.
     */
    public function getTypeCritereCouleurBt() {
        return $this->typeCritereCouleurBt;
    }

    /**
     * Set the format duree.
     *
     * @param bool $formatDuree The format duree.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setFormatDuree($formatDuree) {
        $this->formatDuree = $formatDuree;
        return $this;
    }

    /**
     * Set the jours cpa deduire.
     *
     * @param bool $joursCpaDeduire The jours cpa deduire.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setJoursCpaDeduire($joursCpaDeduire) {
        $this->joursCpaDeduire = $joursCpaDeduire;
        return $this;
    }

    /**
     * Set the nb decimales duree.
     *
     * @param string $nbDecimalesDuree The nb decimales duree.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNbDecimalesDuree($nbDecimalesDuree) {
        $this->nbDecimalesDuree = $nbDecimalesDuree;
        return $this;
    }

    /**
     * Set the num critere bt bool1.
     *
     * @param string $numCritereBtBool1 The num critere bt bool1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtBool1($numCritereBtBool1) {
        $this->numCritereBtBool1 = $numCritereBtBool1;
        return $this;
    }

    /**
     * Set the num critere bt bool2.
     *
     * @param string $numCritereBtBool2 The num critere bt bool2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtBool2($numCritereBtBool2) {
        $this->numCritereBtBool2 = $numCritereBtBool2;
        return $this;
    }

    /**
     * Set the num critere bt byte1.
     *
     * @param string $numCritereBtByte1 The num critere bt byte1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtByte1($numCritereBtByte1) {
        $this->numCritereBtByte1 = $numCritereBtByte1;
        return $this;
    }

    /**
     * Set the num critere bt lst1.
     *
     * @param string $numCritereBtLst1 The num critere bt lst1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtLst1($numCritereBtLst1) {
        $this->numCritereBtLst1 = $numCritereBtLst1;
        return $this;
    }

    /**
     * Set the num critere bt lst2.
     *
     * @param string $numCritereBtLst2 The num critere bt lst2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtLst2($numCritereBtLst2) {
        $this->numCritereBtLst2 = $numCritereBtLst2;
        return $this;
    }

    /**
     * Set the num critere bt txt1.
     *
     * @param string $numCritereBtTxt1 The num critere bt txt1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtTxt1($numCritereBtTxt1) {
        $this->numCritereBtTxt1 = $numCritereBtTxt1;
        return $this;
    }

    /**
     * Set the num critere bt txt2.
     *
     * @param string $numCritereBtTxt2 The num critere bt txt2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereBtTxt2($numCritereBtTxt2) {
        $this->numCritereBtTxt2 = $numCritereBtTxt2;
        return $this;
    }

    /**
     * Set the num critere couleur bt.
     *
     * @param string $numCritereCouleurBt The num critere couleur bt.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereCouleurBt($numCritereCouleurBt) {
        $this->numCritereCouleurBt = $numCritereCouleurBt;
        return $this;
    }

    /**
     * Set the num critere da txt1.
     *
     * @param string $numCritereDaTxt1 The num critere da txt1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereDaTxt1($numCritereDaTxt1) {
        $this->numCritereDaTxt1 = $numCritereDaTxt1;
        return $this;
    }

    /**
     * Set the num critere recla lst1.
     *
     * @param string $numCritereReclaLst1 The num critere recla lst1.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereReclaLst1($numCritereReclaLst1) {
        $this->numCritereReclaLst1 = $numCritereReclaLst1;
        return $this;
    }

    /**
     * Set the num critere recla lst2.
     *
     * @param string $numCritereReclaLst2 The num critere recla lst2.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setNumCritereReclaLst2($numCritereReclaLst2) {
        $this->numCritereReclaLst2 = $numCritereReclaLst2;
        return $this;
    }

    /**
     * Set the publier photo web.
     *
     * @param bool $publierPhotoWeb The publier photo web.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setPublierPhotoWeb($publierPhotoWeb) {
        $this->publierPhotoWeb = $publierPhotoWeb;
        return $this;
    }

    /**
     * Set the type critere couleur bt.
     *
     * @param string $typeCritereCouleurBt The type critere couleur bt.
     * @return Constantes2 Returns this Constantes2.
     */
    public function setTypeCritereCouleurBt($typeCritereCouleurBt) {
        $this->typeCritereCouleurBt = $typeCritereCouleurBt;
        return $this;
    }
}
