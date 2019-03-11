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
 * Fiches confidentialites controles model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class FichesConfidentialitesControles {

    /**
     * Agence.
     *
     * @var string
     */
    private $agence;

    /**
     * Autorise.
     *
     * @var bool
     */
    private $autorise;

    /**
     * Code coll.
     *
     * @var string
     */
    private $codeColl;

    /**
     * Dossier.
     *
     * @var string
     */
    private $dossier;

    /**
     * Mot controle.
     *
     * @var string
     */
    private $motControle;

    /**
     * Mot de passe.
     *
     * @var string
     */
    private $motDePasse;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the agence.
     *
     * @return string Returns the agence.
     */
    public function getAgence() {
        return $this->agence;
    }

    /**
     * Get the autorise.
     *
     * @return bool Returns the autorise.
     */
    public function getAutorise() {
        return $this->autorise;
    }

    /**
     * Get the code coll.
     *
     * @return string Returns the code coll.
     */
    public function getCodeColl() {
        return $this->codeColl;
    }

    /**
     * Get the dossier.
     *
     * @return string Returns the dossier.
     */
    public function getDossier() {
        return $this->dossier;
    }

    /**
     * Get the mot controle.
     *
     * @return string Returns the mot controle.
     */
    public function getMotControle() {
        return $this->motControle;
    }

    /**
     * Get the mot de passe.
     *
     * @return string Returns the mot de passe.
     */
    public function getMotDePasse() {
        return $this->motDePasse;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the agence.
     *
     * @param string $agence The agence.
     * @return FichesConfidentialitesControles Returns this fiches confidentialites controles.
     */
    public function setAgence($agence) {
        $this->agence = $agence;
        return $this;
    }

    /**
     * Set the autorise.
     *
     * @param bool $autorise The autorise.
     * @return FichesConfidentialitesControles Returns this fiches confidentialites controles.
     */
    public function setAutorise($autorise) {
        $this->autorise = $autorise;
        return $this;
    }

    /**
     * Set the code coll.
     *
     * @param string $codeColl The code coll.
     * @return FichesConfidentialitesControles Returns this fiches confidentialites controles.
     */
    public function setCodeColl($codeColl) {
        $this->codeColl = $codeColl;
        return $this;
    }

    /**
     * Set the dossier.
     *
     * @param string $dossier The dossier.
     * @return FichesConfidentialitesControles Returns this fiches confidentialites controles.
     */
    public function setDossier($dossier) {
        $this->dossier = $dossier;
        return $this;
    }

    /**
     * Set the mot controle.
     *
     * @param string $motControle The mot controle.
     * @return FichesConfidentialitesControles Returns this fiches confidentialites controles.
     */
    public function setMotControle($motControle) {
        $this->motControle = $motControle;
        return $this;
    }

    /**
     * Set the mot de passe.
     *
     * @param string $motDePasse The mot de passe.
     * @return FichesConfidentialitesControles Returns this fiches confidentialites controles.
     */
    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return FichesConfidentialitesControles Returns this fiches confidentialites controles.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
