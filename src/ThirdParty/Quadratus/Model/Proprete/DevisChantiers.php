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
 * Devis chantiers.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DevisChantiers {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Maj descriptif.
     *
     * @var bool
     */
    private $majDescriptif;

    /**
     * Montant ht.
     *
     * @var float
     */
    private $montantHt;

    /**
     * Num devis.
     *
     * @var string
     */
    private $numDevis;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the maj descriptif.
     *
     * @return bool Returns the maj descriptif.
     */
    public function getMajDescriptif() {
        return $this->majDescriptif;
    }

    /**
     * Get the montant ht.
     *
     * @return float Returns the montant ht.
     */
    public function getMontantHt() {
        return $this->montantHt;
    }

    /**
     * Get the num devis.
     *
     * @return string Returns the num devis.
     */
    public function getNumDevis() {
        return $this->numDevis;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the maj descriptif.
     *
     * @param bool $majDescriptif The maj descriptif.
     */
    public function setMajDescriptif($majDescriptif) {
        $this->majDescriptif = $majDescriptif;
        return $this;
    }

    /**
     * Set the montant ht.
     *
     * @param float $montantHt The montant ht.
     */
    public function setMontantHt($montantHt) {
        $this->montantHt = $montantHt;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string $numDevis The num devis.
     */
    public function setNumDevis($numDevis) {
        $this->numDevis = $numDevis;
        return $this;
    }
}
