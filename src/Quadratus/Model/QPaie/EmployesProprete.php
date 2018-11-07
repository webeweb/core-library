<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

/**
 * Employes proprete model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class EmployesProprete {

    /**
     * Controleur.
     *
     * @var boolean
     */
    private $controleur;

    /**
     * Hotellerie.
     *
     * @var boolean
     */
    private $hotellerie;

    /**
     * Livreur.
     *
     * @var boolean
     */
    private $livreur;

    /**
     * Modulation.
     *
     * @var boolean
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
     * @var boolean
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
     * @return boolean Returns the controleur.
     */
    public function getControleur() {
        return $this->controleur;
    }

    /**
     * Get the hotellerie.
     *
     * @return boolean Returns the hotellerie.
     */
    public function getHotellerie() {
        return $this->hotellerie;
    }

    /**
     * Get the livreur.
     *
     * @return boolean Returns the livreur.
     */
    public function getLivreur() {
        return $this->livreur;
    }

    /**
     * Get the modulation.
     *
     * @return boolean Returns the modulation.
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
     * @return boolean Returns the polyvalent.
     */
    public function getPolyvalent() {
        return $this->polyvalent;
    }

    /**
     * Set the controleur.
     *
     * @param boolean $controleur The controleur.
     * @return EmployesProprete Returns this employes proprete.
     */
    public function setControleur($controleur) {
        $this->controleur = $controleur;
        return $this;
    }

    /**
     * Set the hotellerie.
     *
     * @param boolean $hotellerie The hotellerie.
     * @return EmployesProprete Returns this employes proprete.
     */
    public function setHotellerie($hotellerie) {
        $this->hotellerie = $hotellerie;
        return $this;
    }

    /**
     * Set the livreur.
     *
     * @param boolean $livreur The livreur.
     * @return EmployesProprete Returns this employes proprete.
     */
    public function setLivreur($livreur) {
        $this->livreur = $livreur;
        return $this;
    }

    /**
     * Set the modulation.
     *
     * @param boolean $modulation The modulation.
     * @return EmployesProprete Returns this employes proprete.
     */
    public function setModulation($modulation) {
        $this->modulation = $modulation;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return EmployesProprete Returns this employes proprete.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the polyvalent.
     *
     * @param boolean $polyvalent The polyvalent.
     * @return EmployesProprete Returns this employes proprete.
     */
    public function setPolyvalent($polyvalent) {
        $this->polyvalent = $polyvalent;
        return $this;
    }

}
