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
 * Histo transfert cpta model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class HistoTransfertCpta {

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Date ecriture.
     *
     * @var DateTime
     */
    private $dateEcriture;

    /**
     * Num lot.
     *
     * @var int
     */
    private $numLot;

    /**
     * Periode transfert.
     *
     * @var DateTime
     */
    private $periodeTransfert;

    /**
     * Type transfert.
     *
     * @var string
     */
    private $typeTransfert;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code journal.
     *
     * @return string Returns the code journal.
     */
    public function getCodeJournal() {
        return $this->codeJournal;
    }

    /**
     * Get the date ecriture.
     *
     * @return DateTime Returns the date ecriture.
     */
    public function getDateEcriture() {
        return $this->dateEcriture;
    }

    /**
     * Get the num lot.
     *
     * @return int Returns the num lot.
     */
    public function getNumLot() {
        return $this->numLot;
    }

    /**
     * Get the periode transfert.
     *
     * @return DateTime Returns the periode transfert.
     */
    public function getPeriodeTransfert() {
        return $this->periodeTransfert;
    }

    /**
     * Get the type transfert.
     *
     * @return string Returns the type transfert.
     */
    public function getTypeTransfert() {
        return $this->typeTransfert;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return HistoTransfertCpta Returns this histo transfert cpta.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     * @return HistoTransfertCpta Returns this histo transfert cpta.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the date ecriture.
     *
     * @param DateTime $dateEcriture The date ecriture.
     * @return HistoTransfertCpta Returns this histo transfert cpta.
     */
    public function setDateEcriture(DateTime $dateEcriture = null) {
        $this->dateEcriture = $dateEcriture;
        return $this;
    }

    /**
     * Set the num lot.
     *
     * @param int $numLot The num lot.
     * @return HistoTransfertCpta Returns this histo transfert cpta.
     */
    public function setNumLot($numLot) {
        $this->numLot = $numLot;
        return $this;
    }

    /**
     * Set the periode transfert.
     *
     * @param DateTime $periodeTransfert The periode transfert.
     * @return HistoTransfertCpta Returns this histo transfert cpta.
     */
    public function setPeriodeTransfert(DateTime $periodeTransfert = null) {
        $this->periodeTransfert = $periodeTransfert;
        return $this;
    }

    /**
     * Set the type transfert.
     *
     * @param string $typeTransfert The type transfert.
     * @return HistoTransfertCpta Returns this histo transfert cpta.
     */
    public function setTypeTransfert($typeTransfert) {
        $this->typeTransfert = $typeTransfert;
        return $this;
    }

}
