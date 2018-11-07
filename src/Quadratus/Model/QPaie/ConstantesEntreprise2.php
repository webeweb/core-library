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

use DateTime;

/**
 * Constantes entreprise2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class ConstantesEntreprise2 {

    /**
     * Date application f s lisse.
     *
     * @var DateTime
     */
    private $dateApplicationFSLisse;

    /**
     * Date application forfait social8.
     *
     * @var DateTime
     */
    private $dateApplicationForfaitSocial8;

    /**
     * Gere e v t fin contrat lot.
     *
     * @var boolean
     */
    private $gereEVTFinContratLot;

    /**
     * Gere prev norme d s n.
     *
     * @var boolean
     */
    private $gerePrevNormeDSN;

    /**
     * Gestion d s n.
     *
     * @var boolean
     */
    private $gestionDSN;

    /**
     * N evenement d s n.
     *
     * @var int
     */
    private $nEvenementDSN;

    /**
     * Ne pas activer prime annuelle proprete.
     *
     * @var boolean
     */
    private $nePasActiverPrimeAnnuelleProprete;

    /**
     * Regime mixte m s a.
     *
     * @var boolean
     */
    private $regimeMixteMSA;

    /**
     * Taux prime annuelle proprete moins20 ans.
     *
     * @var float
     */
    private $tauxPrimeAnnuellePropreteMoins20Ans;

    /**
     * Taux prime annuelle proprete plus20 ans.
     *
     * @var float
     */
    private $tauxPrimeAnnuellePropretePlus20Ans;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date application f s lisse.
     *
     * @return DateTime Returns the date application f s lisse.
     */
    public function getDateApplicationFSLisse() {
        return $this->dateApplicationFSLisse;
    }

    /**
     * Get the date application forfait social8.
     *
     * @return DateTime Returns the date application forfait social8.
     */
    public function getDateApplicationForfaitSocial8() {
        return $this->dateApplicationForfaitSocial8;
    }

    /**
     * Get the gere e v t fin contrat lot.
     *
     * @return boolean Returns the gere e v t fin contrat lot.
     */
    public function getGereEVTFinContratLot() {
        return $this->gereEVTFinContratLot;
    }

    /**
     * Get the gere prev norme d s n.
     *
     * @return boolean Returns the gere prev norme d s n.
     */
    public function getGerePrevNormeDSN() {
        return $this->gerePrevNormeDSN;
    }

    /**
     * Get the gestion d s n.
     *
     * @return boolean Returns the gestion d s n.
     */
    public function getGestionDSN() {
        return $this->gestionDSN;
    }

    /**
     * Get the n evenement d s n.
     *
     * @return int Returns the n evenement d s n.
     */
    public function getNEvenementDSN() {
        return $this->nEvenementDSN;
    }

    /**
     * Get the ne pas activer prime annuelle proprete.
     *
     * @return boolean Returns the ne pas activer prime annuelle proprete.
     */
    public function getNePasActiverPrimeAnnuelleProprete() {
        return $this->nePasActiverPrimeAnnuelleProprete;
    }

    /**
     * Get the regime mixte m s a.
     *
     * @return boolean Returns the regime mixte m s a.
     */
    public function getRegimeMixteMSA() {
        return $this->regimeMixteMSA;
    }

    /**
     * Get the taux prime annuelle proprete moins20 ans.
     *
     * @return float Returns the taux prime annuelle proprete moins20 ans.
     */
    public function getTauxPrimeAnnuellePropreteMoins20Ans() {
        return $this->tauxPrimeAnnuellePropreteMoins20Ans;
    }

    /**
     * Get the taux prime annuelle proprete plus20 ans.
     *
     * @return float Returns the taux prime annuelle proprete plus20 ans.
     */
    public function getTauxPrimeAnnuellePropretePlus20Ans() {
        return $this->tauxPrimeAnnuellePropretePlus20Ans;
    }

    /**
     * Set the date application f s lisse.
     *
     * @param DateTime $dateApplicationFSLisse The date application f s lisse.
     * @return ConstantesEntreprise2 Returns this constantes entreprise2.
     */
    public function setDateApplicationFSLisse(DateTime $dateApplicationFSLisse = null) {
        $this->dateApplicationFSLisse = $dateApplicationFSLisse;
        return $this;
    }

    /**
     * Set the date application forfait social8.
     *
     * @param DateTime $dateApplicationForfaitSocial8 The date application forfait social8.
     * @return ConstantesEntreprise2 Returns this constantes entreprise2.
     */
    public function setDateApplicationForfaitSocial8(DateTime $dateApplicationForfaitSocial8 = null) {
        $this->dateApplicationForfaitSocial8 = $dateApplicationForfaitSocial8;
        return $this;
    }

    /**
     * Set the gere e v t fin contrat lot.
     *
     * @param boolean $gereEVTFinContratLot The gere e v t fin contrat lot.
     * @return ConstantesEntreprise2 Returns this constantes entreprise2.
     */
    public function setGereEVTFinContratLot($gereEVTFinContratLot) {
        $this->gereEVTFinContratLot = $gereEVTFinContratLot;
        return $this;
    }

    /**
     * Set the gere prev norme d s n.
     *
     * @param boolean $gerePrevNormeDSN The gere prev norme d s n.
     * @return ConstantesEntreprise2 Returns this constantes entreprise2.
     */
    public function setGerePrevNormeDSN($gerePrevNormeDSN) {
        $this->gerePrevNormeDSN = $gerePrevNormeDSN;
        return $this;
    }

    /**
     * Set the gestion d s n.
     *
     * @param boolean $gestionDSN The gestion d s n.
     * @return ConstantesEntreprise2 Returns this constantes entreprise2.
     */
    public function setGestionDSN($gestionDSN) {
        $this->gestionDSN = $gestionDSN;
        return $this;
    }

    /**
     * Set the n evenement d s n.
     *
     * @param int $nEvenementDSN The n evenement d s n.
     * @return ConstantesEntreprise2 Returns this constantes entreprise2.
     */
    public function setNEvenementDSN($nEvenementDSN) {
        $this->nEvenementDSN = $nEvenementDSN;
        return $this;
    }

    /**
     * Set the ne pas activer prime annuelle proprete.
     *
     * @param boolean $nePasActiverPrimeAnnuelleProprete The ne pas activer prime annuelle proprete.
     * @return ConstantesEntreprise2 Returns this constantes entreprise2.
     */
    public function setNePasActiverPrimeAnnuelleProprete($nePasActiverPrimeAnnuelleProprete) {
        $this->nePasActiverPrimeAnnuelleProprete = $nePasActiverPrimeAnnuelleProprete;
        return $this;
    }

    /**
     * Set the regime mixte m s a.
     *
     * @param boolean $regimeMixteMSA The regime mixte m s a.
     * @return ConstantesEntreprise2 Returns this constantes entreprise2.
     */
    public function setRegimeMixteMSA($regimeMixteMSA) {
        $this->regimeMixteMSA = $regimeMixteMSA;
        return $this;
    }

    /**
     * Set the taux prime annuelle proprete moins20 ans.
     *
     * @param float $tauxPrimeAnnuellePropreteMoins20Ans The taux prime annuelle proprete moins20 ans.
     * @return ConstantesEntreprise2 Returns this constantes entreprise2.
     */
    public function setTauxPrimeAnnuellePropreteMoins20Ans($tauxPrimeAnnuellePropreteMoins20Ans) {
        $this->tauxPrimeAnnuellePropreteMoins20Ans = $tauxPrimeAnnuellePropreteMoins20Ans;
        return $this;
    }

    /**
     * Set the taux prime annuelle proprete plus20 ans.
     *
     * @param float $tauxPrimeAnnuellePropretePlus20Ans The taux prime annuelle proprete plus20 ans.
     * @return ConstantesEntreprise2 Returns this constantes entreprise2.
     */
    public function setTauxPrimeAnnuellePropretePlus20Ans($tauxPrimeAnnuellePropretePlus20Ans) {
        $this->tauxPrimeAnnuellePropretePlus20Ans = $tauxPrimeAnnuellePropretePlus20Ans;
        return $this;
    }

}
