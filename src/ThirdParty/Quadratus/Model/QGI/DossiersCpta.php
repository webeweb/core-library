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
 * Dossiers cpta model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class DossiersCpta {

    /**
     * Chemin dossier cpta.
     *
     * @var string
     */
    private $cheminDossierCpta;

    /**
     * Num dossier cpta.
     *
     * @var string
     */
    private $numDossierCpta;

    /**
     * Num dossier fact.
     *
     * @var string
     */
    private $numDossierFact;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the chemin dossier cpta.
     *
     * @return string Returns the chemin dossier cpta.
     */
    public function getCheminDossierCpta() {
        return $this->cheminDossierCpta;
    }

    /**
     * Get the num dossier cpta.
     *
     * @return string Returns the num dossier cpta.
     */
    public function getNumDossierCpta() {
        return $this->numDossierCpta;
    }

    /**
     * Get the num dossier fact.
     *
     * @return string Returns the num dossier fact.
     */
    public function getNumDossierFact() {
        return $this->numDossierFact;
    }

    /**
     * Set the chemin dossier cpta.
     *
     * @param string $cheminDossierCpta The chemin dossier cpta.
     * @return DossiersCpta Returns this dossiers cpta.
     */
    public function setCheminDossierCpta($cheminDossierCpta) {
        $this->cheminDossierCpta = $cheminDossierCpta;
        return $this;
    }

    /**
     * Set the num dossier cpta.
     *
     * @param string $numDossierCpta The num dossier cpta.
     * @return DossiersCpta Returns this dossiers cpta.
     */
    public function setNumDossierCpta($numDossierCpta) {
        $this->numDossierCpta = $numDossierCpta;
        return $this;
    }

    /**
     * Set the num dossier fact.
     *
     * @param string $numDossierFact The num dossier fact.
     * @return DossiersCpta Returns this dossiers cpta.
     */
    public function setNumDossierFact($numDossierFact) {
        $this->numDossierFact = $numDossierFact;
        return $this;
    }
}
