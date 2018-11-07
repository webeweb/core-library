<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * Liaisons types envois model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class LiaisonsTypesEnvois {

    /**
     * A bloquer.
     *
     * @var string
     */
    private $aBloquer;

    /**
     * A emettre.
     *
     * @var string
     */
    private $aEmettre;

    /**
     * Accepte depuis q bureau.
     *
     * @var boolean
     */
    private $accepteDepuisQBureau;

    /**
     * Accepte depuis q c.
     *
     * @var boolean
     */
    private $accepteDepuisQC;

    /**
     * Accepte depuis q p.
     *
     * @var boolean
     */
    private $accepteDepuisQP;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Modifiable.
     *
     * @var boolean
     */
    private $modifiable;

    /**
     * Sans images.
     *
     * @var boolean
     */
    private $sansImages;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a bloquer.
     *
     * @return string Returns the a bloquer.
     */
    public function getABloquer() {
        return $this->aBloquer;
    }

    /**
     * Get the a emettre.
     *
     * @return string Returns the a emettre.
     */
    public function getAEmettre() {
        return $this->aEmettre;
    }

    /**
     * Get the accepte depuis q bureau.
     *
     * @return boolean Returns the accepte depuis q bureau.
     */
    public function getAccepteDepuisQBureau() {
        return $this->accepteDepuisQBureau;
    }

    /**
     * Get the accepte depuis q c.
     *
     * @return boolean Returns the accepte depuis q c.
     */
    public function getAccepteDepuisQC() {
        return $this->accepteDepuisQC;
    }

    /**
     * Get the accepte depuis q p.
     *
     * @return boolean Returns the accepte depuis q p.
     */
    public function getAccepteDepuisQP() {
        return $this->accepteDepuisQP;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
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
     * Get the modifiable.
     *
     * @return boolean Returns the modifiable.
     */
    public function getModifiable() {
        return $this->modifiable;
    }

    /**
     * Get the sans images.
     *
     * @return boolean Returns the sans images.
     */
    public function getSansImages() {
        return $this->sansImages;
    }

    /**
     * Set the a bloquer.
     *
     * @param string $aBloquer The a bloquer.
     * @return LiaisonsTypesEnvois Returns this liaisons types envois.
     */
    public function setABloquer($aBloquer) {
        $this->aBloquer = $aBloquer;
        return $this;
    }

    /**
     * Set the a emettre.
     *
     * @param string $aEmettre The a emettre.
     * @return LiaisonsTypesEnvois Returns this liaisons types envois.
     */
    public function setAEmettre($aEmettre) {
        $this->aEmettre = $aEmettre;
        return $this;
    }

    /**
     * Set the accepte depuis q bureau.
     *
     * @param boolean $accepteDepuisQBureau The accepte depuis q bureau.
     * @return LiaisonsTypesEnvois Returns this liaisons types envois.
     */
    public function setAccepteDepuisQBureau($accepteDepuisQBureau) {
        $this->accepteDepuisQBureau = $accepteDepuisQBureau;
        return $this;
    }

    /**
     * Set the accepte depuis q c.
     *
     * @param boolean $accepteDepuisQC The accepte depuis q c.
     * @return LiaisonsTypesEnvois Returns this liaisons types envois.
     */
    public function setAccepteDepuisQC($accepteDepuisQC) {
        $this->accepteDepuisQC = $accepteDepuisQC;
        return $this;
    }

    /**
     * Set the accepte depuis q p.
     *
     * @param boolean $accepteDepuisQP The accepte depuis q p.
     * @return LiaisonsTypesEnvois Returns this liaisons types envois.
     */
    public function setAccepteDepuisQP($accepteDepuisQP) {
        $this->accepteDepuisQP = $accepteDepuisQP;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return LiaisonsTypesEnvois Returns this liaisons types envois.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return LiaisonsTypesEnvois Returns this liaisons types envois.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the modifiable.
     *
     * @param boolean $modifiable The modifiable.
     * @return LiaisonsTypesEnvois Returns this liaisons types envois.
     */
    public function setModifiable($modifiable) {
        $this->modifiable = $modifiable;
        return $this;
    }

    /**
     * Set the sans images.
     *
     * @param boolean $sansImages The sans images.
     * @return LiaisonsTypesEnvois Returns this liaisons types envois.
     */
    public function setSansImages($sansImages) {
        $this->sansImages = $sansImages;
        return $this;
    }

}
