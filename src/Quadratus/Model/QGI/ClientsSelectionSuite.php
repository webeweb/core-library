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
 * Clients selection suite model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class ClientsSelectionSuite {

    /**
     * Coche client.
     *
     * @var boolean
     */
    private $cocheClient;

    /**
     * Coche fournisseur.
     *
     * @var boolean
     */
    private $cocheFournisseur;

    /**
     * Coche intervenant.
     *
     * @var boolean
     */
    private $cocheIntervenant;

    /**
     * Coche prospect.
     *
     * @var boolean
     */
    private $cocheProspect;

    /**
     * Coche sorti.
     *
     * @var boolean
     */
    private $cocheSorti;

    /**
     * Code col.
     *
     * @var string
     */
    private $codeCol;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the coche client.
     *
     * @return boolean Returns the coche client.
     */
    public function getCocheClient() {
        return $this->cocheClient;
    }

    /**
     * Get the coche fournisseur.
     *
     * @return boolean Returns the coche fournisseur.
     */
    public function getCocheFournisseur() {
        return $this->cocheFournisseur;
    }

    /**
     * Get the coche intervenant.
     *
     * @return boolean Returns the coche intervenant.
     */
    public function getCocheIntervenant() {
        return $this->cocheIntervenant;
    }

    /**
     * Get the coche prospect.
     *
     * @return boolean Returns the coche prospect.
     */
    public function getCocheProspect() {
        return $this->cocheProspect;
    }

    /**
     * Get the coche sorti.
     *
     * @return boolean Returns the coche sorti.
     */
    public function getCocheSorti() {
        return $this->cocheSorti;
    }

    /**
     * Get the code col.
     *
     * @return string Returns the code col.
     */
    public function getCodeCol() {
        return $this->codeCol;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Set the coche client.
     *
     * @param boolean $cocheClient The coche client.
     * @return ClientsSelectionSuite Returns this clients selection suite.
     */
    public function setCocheClient($cocheClient) {
        $this->cocheClient = $cocheClient;
        return $this;
    }

    /**
     * Set the coche fournisseur.
     *
     * @param boolean $cocheFournisseur The coche fournisseur.
     * @return ClientsSelectionSuite Returns this clients selection suite.
     */
    public function setCocheFournisseur($cocheFournisseur) {
        $this->cocheFournisseur = $cocheFournisseur;
        return $this;
    }

    /**
     * Set the coche intervenant.
     *
     * @param boolean $cocheIntervenant The coche intervenant.
     * @return ClientsSelectionSuite Returns this clients selection suite.
     */
    public function setCocheIntervenant($cocheIntervenant) {
        $this->cocheIntervenant = $cocheIntervenant;
        return $this;
    }

    /**
     * Set the coche prospect.
     *
     * @param boolean $cocheProspect The coche prospect.
     * @return ClientsSelectionSuite Returns this clients selection suite.
     */
    public function setCocheProspect($cocheProspect) {
        $this->cocheProspect = $cocheProspect;
        return $this;
    }

    /**
     * Set the coche sorti.
     *
     * @param boolean $cocheSorti The coche sorti.
     * @return ClientsSelectionSuite Returns this clients selection suite.
     */
    public function setCocheSorti($cocheSorti) {
        $this->cocheSorti = $cocheSorti;
        return $this;
    }

    /**
     * Set the code col.
     *
     * @param string $codeCol The code col.
     * @return ClientsSelectionSuite Returns this clients selection suite.
     */
    public function setCodeCol($codeCol) {
        $this->codeCol = $codeCol;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return ClientsSelectionSuite Returns this clients selection suite.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

}
