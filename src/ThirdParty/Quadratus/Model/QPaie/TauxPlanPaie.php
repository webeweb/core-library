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
 * Taux plan paie model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxPlanPaie {

    /**
     * A partir de.
     *
     * @var DateTime
     */
    private $aPartirDe;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Format non etendu.
     *
     * @var bool
     */
    private $formatNonEtendu;

    /**
     * Numero taux.
     *
     * @var int
     */
    private $numeroTaux;

    /**
     * Taux patronal.
     *
     * @var float
     */
    private $tauxPatronal;

    /**
     * Taux salarial.
     *
     * @var float
     */
    private $tauxSalarial;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a partir de.
     *
     * @return DateTime Returns the a partir de.
     */
    public function getAPartirDe() {
        return $this->aPartirDe;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the format non etendu.
     *
     * @return bool Returns the format non etendu.
     */
    public function getFormatNonEtendu() {
        return $this->formatNonEtendu;
    }

    /**
     * Get the numero taux.
     *
     * @return int Returns the numero taux.
     */
    public function getNumeroTaux() {
        return $this->numeroTaux;
    }

    /**
     * Get the taux patronal.
     *
     * @return float Returns the taux patronal.
     */
    public function getTauxPatronal() {
        return $this->tauxPatronal;
    }

    /**
     * Get the taux salarial.
     *
     * @return float Returns the taux salarial.
     */
    public function getTauxSalarial() {
        return $this->tauxSalarial;
    }

    /**
     * Set the a partir de.
     *
     * @param DateTime $aPartirDe The a partir de.
     * @return TauxPlanPaie Returns this taux plan paie.
     */
    public function setAPartirDe(DateTime $aPartirDe = null) {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return TauxPlanPaie Returns this taux plan paie.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the format non etendu.
     *
     * @param bool $formatNonEtendu The format non etendu.
     * @return TauxPlanPaie Returns this taux plan paie.
     */
    public function setFormatNonEtendu($formatNonEtendu) {
        $this->formatNonEtendu = $formatNonEtendu;
        return $this;
    }

    /**
     * Set the numero taux.
     *
     * @param int $numeroTaux The numero taux.
     * @return TauxPlanPaie Returns this taux plan paie.
     */
    public function setNumeroTaux($numeroTaux) {
        $this->numeroTaux = $numeroTaux;
        return $this;
    }

    /**
     * Set the taux patronal.
     *
     * @param float $tauxPatronal The taux patronal.
     * @return TauxPlanPaie Returns this taux plan paie.
     */
    public function setTauxPatronal($tauxPatronal) {
        $this->tauxPatronal = $tauxPatronal;
        return $this;
    }

    /**
     * Set the taux salarial.
     *
     * @param float $tauxSalarial The taux salarial.
     * @return TauxPlanPaie Returns this taux plan paie.
     */
    public function setTauxSalarial($tauxSalarial) {
        $this->tauxSalarial = $tauxSalarial;
        return $this;
    }
}
