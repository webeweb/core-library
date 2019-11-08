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
 * Liaisons types envois.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
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
     * @var bool
     */
    private $accepteDepuisQBureau;

    /**
     * Accepte depuis qc.
     *
     * @var bool
     */
    private $accepteDepuisQc;

    /**
     * Accepte depuis qp.
     *
     * @var bool
     */
    private $accepteDepuisQp;

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
     * @var bool
     */
    private $modifiable;

    /**
     * Sans images.
     *
     * @var bool
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
     * @return bool Returns the accepte depuis q bureau.
     */
    public function getAccepteDepuisQBureau() {
        return $this->accepteDepuisQBureau;
    }

    /**
     * Get the accepte depuis qc.
     *
     * @return bool Returns the accepte depuis qc.
     */
    public function getAccepteDepuisQc() {
        return $this->accepteDepuisQc;
    }

    /**
     * Get the accepte depuis qp.
     *
     * @return bool Returns the accepte depuis qp.
     */
    public function getAccepteDepuisQp() {
        return $this->accepteDepuisQp;
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
     * @return bool Returns the modifiable.
     */
    public function getModifiable() {
        return $this->modifiable;
    }

    /**
     * Get the sans images.
     *
     * @return bool Returns the sans images.
     */
    public function getSansImages() {
        return $this->sansImages;
    }

    /**
     * Set the a bloquer.
     *
     * @param string $aBloquer The a bloquer.
     */
    public function setABloquer($aBloquer) {
        $this->aBloquer = $aBloquer;
        return $this;
    }

    /**
     * Set the a emettre.
     *
     * @param string $aEmettre The a emettre.
     */
    public function setAEmettre($aEmettre) {
        $this->aEmettre = $aEmettre;
        return $this;
    }

    /**
     * Set the accepte depuis q bureau.
     *
     * @param bool $accepteDepuisQBureau The accepte depuis q bureau.
     */
    public function setAccepteDepuisQBureau($accepteDepuisQBureau) {
        $this->accepteDepuisQBureau = $accepteDepuisQBureau;
        return $this;
    }

    /**
     * Set the accepte depuis qc.
     *
     * @param bool $accepteDepuisQc The accepte depuis qc.
     */
    public function setAccepteDepuisQc($accepteDepuisQc) {
        $this->accepteDepuisQc = $accepteDepuisQc;
        return $this;
    }

    /**
     * Set the accepte depuis qp.
     *
     * @param bool $accepteDepuisQp The accepte depuis qp.
     */
    public function setAccepteDepuisQp($accepteDepuisQp) {
        $this->accepteDepuisQp = $accepteDepuisQp;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the modifiable.
     *
     * @param bool $modifiable The modifiable.
     */
    public function setModifiable($modifiable) {
        $this->modifiable = $modifiable;
        return $this;
    }

    /**
     * Set the sans images.
     *
     * @param bool $sansImages The sans images.
     */
    public function setSansImages($sansImages) {
        $this->sansImages = $sansImages;
        return $this;
    }
}
