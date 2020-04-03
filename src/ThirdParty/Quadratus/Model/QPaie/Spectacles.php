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
 * Spectacles.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Spectacles {

    /**
     * Dt debut.
     *
     * @var DateTime|null
     */
    private $dtDebut;

    /**
     * Dt fin.
     *
     * @var DateTime|null
     */
    private $dtFin;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Num objet.
     *
     * @var string
     */
    private $numObjet;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the dt debut.
     *
     * @return DateTime|null Returns the dt debut.
     */
    public function getDtDebut() {
        return $this->dtDebut;
    }

    /**
     * Get the dt fin.
     *
     * @return DateTime|null Returns the dt fin.
     */
    public function getDtFin() {
        return $this->dtFin;
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
     * Get the num objet.
     *
     * @return string Returns the num objet.
     */
    public function getNumObjet() {
        return $this->numObjet;
    }

    /**
     * Set the dt debut.
     *
     * @param DateTime|null $dtDebut The dt debut.
     * @return Spectacles Returns this Spectacles.
     */
    public function setDtDebut(DateTime $dtDebut = null) {
        $this->dtDebut = $dtDebut;
        return $this;
    }

    /**
     * Set the dt fin.
     *
     * @param DateTime|null $dtFin The dt fin.
     * @return Spectacles Returns this Spectacles.
     */
    public function setDtFin(DateTime $dtFin = null) {
        $this->dtFin = $dtFin;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Spectacles Returns this Spectacles.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num objet.
     *
     * @param string $numObjet The num objet.
     * @return Spectacles Returns this Spectacles.
     */
    public function setNumObjet($numObjet) {
        $this->numObjet = $numObjet;
        return $this;
    }
}
