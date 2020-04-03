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
 * Constantes entreprise2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ConstantesEntreprise2 {

    /**
     * Date application forfait social8.
     *
     * @var DateTime|null
     */
    private $dateApplicationForfaitSocial8;

    /**
     * Date application fs lisse.
     *
     * @var DateTime|null
     */
    private $dateApplicationFsLisse;

    /**
     * Gere evt fin contrat lot.
     *
     * @var bool
     */
    private $gereEvtFinContratLot;

    /**
     * Gere prev norme dsn.
     *
     * @var bool
     */
    private $gerePrevNormeDsn;

    /**
     * Gestion dsn.
     *
     * @var bool
     */
    private $gestionDsn;

    /**
     * N evenement dsn.
     *
     * @var int
     */
    private $nEvenementDsn;

    /**
     * Ne pas activer prime annuelle proprete.
     *
     * @var bool
     */
    private $nePasActiverPrimeAnnuelleProprete;

    /**
     * Regime mixte msa.
     *
     * @var bool
     */
    private $regimeMixteMsa;

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
     * Get the date application forfait social8.
     *
     * @return DateTime|null Returns the date application forfait social8.
     */
    public function getDateApplicationForfaitSocial8() {
        return $this->dateApplicationForfaitSocial8;
    }

    /**
     * Get the date application fs lisse.
     *
     * @return DateTime|null Returns the date application fs lisse.
     */
    public function getDateApplicationFsLisse() {
        return $this->dateApplicationFsLisse;
    }

    /**
     * Get the gere evt fin contrat lot.
     *
     * @return bool Returns the gere evt fin contrat lot.
     */
    public function getGereEvtFinContratLot() {
        return $this->gereEvtFinContratLot;
    }

    /**
     * Get the gere prev norme dsn.
     *
     * @return bool Returns the gere prev norme dsn.
     */
    public function getGerePrevNormeDsn() {
        return $this->gerePrevNormeDsn;
    }

    /**
     * Get the gestion dsn.
     *
     * @return bool Returns the gestion dsn.
     */
    public function getGestionDsn() {
        return $this->gestionDsn;
    }

    /**
     * Get the n evenement dsn.
     *
     * @return int Returns the n evenement dsn.
     */
    public function getNEvenementDsn() {
        return $this->nEvenementDsn;
    }

    /**
     * Get the ne pas activer prime annuelle proprete.
     *
     * @return bool Returns the ne pas activer prime annuelle proprete.
     */
    public function getNePasActiverPrimeAnnuelleProprete() {
        return $this->nePasActiverPrimeAnnuelleProprete;
    }

    /**
     * Get the regime mixte msa.
     *
     * @return bool Returns the regime mixte msa.
     */
    public function getRegimeMixteMsa() {
        return $this->regimeMixteMsa;
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
     * Set the date application forfait social8.
     *
     * @param DateTime|null $dateApplicationForfaitSocial8 The date application forfait social8.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setDateApplicationForfaitSocial8(DateTime $dateApplicationForfaitSocial8 = null) {
        $this->dateApplicationForfaitSocial8 = $dateApplicationForfaitSocial8;
        return $this;
    }

    /**
     * Set the date application fs lisse.
     *
     * @param DateTime|null $dateApplicationFsLisse The date application fs lisse.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setDateApplicationFsLisse(DateTime $dateApplicationFsLisse = null) {
        $this->dateApplicationFsLisse = $dateApplicationFsLisse;
        return $this;
    }

    /**
     * Set the gere evt fin contrat lot.
     *
     * @param bool $gereEvtFinContratLot The gere evt fin contrat lot.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setGereEvtFinContratLot($gereEvtFinContratLot) {
        $this->gereEvtFinContratLot = $gereEvtFinContratLot;
        return $this;
    }

    /**
     * Set the gere prev norme dsn.
     *
     * @param bool $gerePrevNormeDsn The gere prev norme dsn.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setGerePrevNormeDsn($gerePrevNormeDsn) {
        $this->gerePrevNormeDsn = $gerePrevNormeDsn;
        return $this;
    }

    /**
     * Set the gestion dsn.
     *
     * @param bool $gestionDsn The gestion dsn.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setGestionDsn($gestionDsn) {
        $this->gestionDsn = $gestionDsn;
        return $this;
    }

    /**
     * Set the n evenement dsn.
     *
     * @param int $nEvenementDsn The n evenement dsn.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setNEvenementDsn($nEvenementDsn) {
        $this->nEvenementDsn = $nEvenementDsn;
        return $this;
    }

    /**
     * Set the ne pas activer prime annuelle proprete.
     *
     * @param bool $nePasActiverPrimeAnnuelleProprete The ne pas activer prime annuelle proprete.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setNePasActiverPrimeAnnuelleProprete($nePasActiverPrimeAnnuelleProprete) {
        $this->nePasActiverPrimeAnnuelleProprete = $nePasActiverPrimeAnnuelleProprete;
        return $this;
    }

    /**
     * Set the regime mixte msa.
     *
     * @param bool $regimeMixteMsa The regime mixte msa.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setRegimeMixteMsa($regimeMixteMsa) {
        $this->regimeMixteMsa = $regimeMixteMsa;
        return $this;
    }

    /**
     * Set the taux prime annuelle proprete moins20 ans.
     *
     * @param float $tauxPrimeAnnuellePropreteMoins20Ans The taux prime annuelle proprete moins20 ans.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setTauxPrimeAnnuellePropreteMoins20Ans($tauxPrimeAnnuellePropreteMoins20Ans) {
        $this->tauxPrimeAnnuellePropreteMoins20Ans = $tauxPrimeAnnuellePropreteMoins20Ans;
        return $this;
    }

    /**
     * Set the taux prime annuelle proprete plus20 ans.
     *
     * @param float $tauxPrimeAnnuellePropretePlus20Ans The taux prime annuelle proprete plus20 ans.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setTauxPrimeAnnuellePropretePlus20Ans($tauxPrimeAnnuellePropretePlus20Ans) {
        $this->tauxPrimeAnnuellePropretePlus20Ans = $tauxPrimeAnnuellePropretePlus20Ans;
        return $this;
    }
}
