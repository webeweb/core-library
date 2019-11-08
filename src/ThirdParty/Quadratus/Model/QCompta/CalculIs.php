<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Calcul is.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class CalculIs {

    /**
     * Correspondance.
     *
     * @var string
     */
    private $correspondance;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Montant.
     *
     * @var float
     */
    private $montant;

    /**
     * Montant n1.
     *
     * @var float
     */
    private $montantN1;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Type ligne.
     *
     * @var string
     */
    private $typeLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the correspondance.
     *
     * @return string Returns the correspondance.
     */
    public function getCorrespondance() {
        return $this->correspondance;
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
     * Get the montant.
     *
     * @return float Returns the montant.
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Get the montant n1.
     *
     * @return float Returns the montant n1.
     */
    public function getMontantN1() {
        return $this->montantN1;
    }

    /**
     * Get the num uniq.
     *
     * @return int Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
    }

    /**
     * Get the type ligne.
     *
     * @return string Returns the type ligne.
     */
    public function getTypeLigne() {
        return $this->typeLigne;
    }

    /**
     * Set the correspondance.
     *
     * @param string $correspondance The correspondance.
     */
    public function setCorrespondance($correspondance) {
        $this->correspondance = $correspondance;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float $montant The montant.
     */
    public function setMontant($montant) {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant n1.
     *
     * @param float $montantN1 The montant n1.
     */
    public function setMontantN1($montantN1) {
        $this->montantN1 = $montantN1;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string $typeLigne The type ligne.
     */
    public function setTypeLigne($typeLigne) {
        $this->typeLigne = $typeLigne;
        return $this;
    }
}
