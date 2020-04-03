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
 * Clients selection suite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelectionSuite {

    /**
     * Coche client.
     *
     * @var bool
     */
    private $cocheClient;

    /**
     * Coche fournisseur.
     *
     * @var bool
     */
    private $cocheFournisseur;

    /**
     * Coche intervenant.
     *
     * @var bool
     */
    private $cocheIntervenant;

    /**
     * Coche prospect.
     *
     * @var bool
     */
    private $cocheProspect;

    /**
     * Coche sorti.
     *
     * @var bool
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
     * @return bool Returns the coche client.
     */
    public function getCocheClient() {
        return $this->cocheClient;
    }

    /**
     * Get the coche fournisseur.
     *
     * @return bool Returns the coche fournisseur.
     */
    public function getCocheFournisseur() {
        return $this->cocheFournisseur;
    }

    /**
     * Get the coche intervenant.
     *
     * @return bool Returns the coche intervenant.
     */
    public function getCocheIntervenant() {
        return $this->cocheIntervenant;
    }

    /**
     * Get the coche prospect.
     *
     * @return bool Returns the coche prospect.
     */
    public function getCocheProspect() {
        return $this->cocheProspect;
    }

    /**
     * Get the coche sorti.
     *
     * @return bool Returns the coche sorti.
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
     * @param bool $cocheClient The coche client.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCocheClient($cocheClient) {
        $this->cocheClient = $cocheClient;
        return $this;
    }

    /**
     * Set the coche fournisseur.
     *
     * @param bool $cocheFournisseur The coche fournisseur.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCocheFournisseur($cocheFournisseur) {
        $this->cocheFournisseur = $cocheFournisseur;
        return $this;
    }

    /**
     * Set the coche intervenant.
     *
     * @param bool $cocheIntervenant The coche intervenant.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCocheIntervenant($cocheIntervenant) {
        $this->cocheIntervenant = $cocheIntervenant;
        return $this;
    }

    /**
     * Set the coche prospect.
     *
     * @param bool $cocheProspect The coche prospect.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCocheProspect($cocheProspect) {
        $this->cocheProspect = $cocheProspect;
        return $this;
    }

    /**
     * Set the coche sorti.
     *
     * @param bool $cocheSorti The coche sorti.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCocheSorti($cocheSorti) {
        $this->cocheSorti = $cocheSorti;
        return $this;
    }

    /**
     * Set the code col.
     *
     * @param string $codeCol The code col.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setCodeCol($codeCol) {
        $this->codeCol = $codeCol;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return ClientsSelectionSuite Returns this Clients selection suite.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }
}
