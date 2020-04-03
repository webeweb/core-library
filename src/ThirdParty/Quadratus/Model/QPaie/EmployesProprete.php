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

/**
 * Employes proprete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmployesProprete {

    /**
     * Controleur.
     *
     * @var bool
     */
    private $controleur;

    /**
     * Hotellerie.
     *
     * @var bool
     */
    private $hotellerie;

    /**
     * Livreur.
     *
     * @var bool
     */
    private $livreur;

    /**
     * Modulation.
     *
     * @var bool
     */
    private $modulation;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Polyvalent.
     *
     * @var bool
     */
    private $polyvalent;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the controleur.
     *
     * @return bool Returns the controleur.
     */
    public function getControleur() {
        return $this->controleur;
    }

    /**
     * Get the hotellerie.
     *
     * @return bool Returns the hotellerie.
     */
    public function getHotellerie() {
        return $this->hotellerie;
    }

    /**
     * Get the livreur.
     *
     * @return bool Returns the livreur.
     */
    public function getLivreur() {
        return $this->livreur;
    }

    /**
     * Get the modulation.
     *
     * @return bool Returns the modulation.
     */
    public function getModulation() {
        return $this->modulation;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the polyvalent.
     *
     * @return bool Returns the polyvalent.
     */
    public function getPolyvalent() {
        return $this->polyvalent;
    }

    /**
     * Set the controleur.
     *
     * @param bool $controleur The controleur.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setControleur($controleur) {
        $this->controleur = $controleur;
        return $this;
    }

    /**
     * Set the hotellerie.
     *
     * @param bool $hotellerie The hotellerie.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setHotellerie($hotellerie) {
        $this->hotellerie = $hotellerie;
        return $this;
    }

    /**
     * Set the livreur.
     *
     * @param bool $livreur The livreur.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setLivreur($livreur) {
        $this->livreur = $livreur;
        return $this;
    }

    /**
     * Set the modulation.
     *
     * @param bool $modulation The modulation.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setModulation($modulation) {
        $this->modulation = $modulation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the polyvalent.
     *
     * @param bool $polyvalent The polyvalent.
     * @return EmployesProprete Returns this Employes proprete.
     */
    public function setPolyvalent($polyvalent) {
        $this->polyvalent = $polyvalent;
        return $this;
    }
}
