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

use DateTime;

/**
 * Historiquehgroupe.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Historiquehgroupe {

    /**
     * Alpha.
     *
     * @var string
     */
    private $alpha;

    /**
     * An n.
     *
     * @var float
     */
    private $anN;

    /**
     * An n1.
     *
     * @var float
     */
    private $anN1;

    /**
     * An n2.
     *
     * @var float
     */
    private $anN2;

    /**
     * Budget1.
     *
     * @var float
     */
    private $budget1;

    /**
     * Budget2.
     *
     * @var float
     */
    private $budget2;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Flg an n.
     *
     * @var bool
     */
    private $flgAnN;

    /**
     * Flg an n1.
     *
     * @var bool
     */
    private $flgAnN1;

    /**
     * Flg an n2.
     *
     * @var bool
     */
    private $flgAnN2;

    /**
     * Flg budget1.
     *
     * @var bool
     */
    private $flgBudget1;

    /**
     * Flg budget2.
     *
     * @var bool
     */
    private $flgBudget2;

    /**
     * Fmt dec.
     *
     * @var int
     */
    private $fmtDec;

    /**
     * Fmt int.
     *
     * @var int
     */
    private $fmtInt;

    /**
     * Memo.
     *
     * @var string
     */
    private $memo;

    /**
     * No conv euro.
     *
     * @var bool
     */
    private $noConvEuro;

    /**
     * Regle.
     *
     * @var string
     */
    private $regle;

    /**
     * Rub.
     *
     * @var string
     */
    private $rub;

    /**
     * Type zone.
     *
     * @var string
     */
    private $typeZone;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the alpha.
     *
     * @return string Returns the alpha.
     */
    public function getAlpha() {
        return $this->alpha;
    }

    /**
     * Get the an n.
     *
     * @return float Returns the an n.
     */
    public function getAnN() {
        return $this->anN;
    }

    /**
     * Get the an n1.
     *
     * @return float Returns the an n1.
     */
    public function getAnN1() {
        return $this->anN1;
    }

    /**
     * Get the an n2.
     *
     * @return float Returns the an n2.
     */
    public function getAnN2() {
        return $this->anN2;
    }

    /**
     * Get the budget1.
     *
     * @return float Returns the budget1.
     */
    public function getBudget1() {
        return $this->budget1;
    }

    /**
     * Get the budget2.
     *
     * @return float Returns the budget2.
     */
    public function getBudget2() {
        return $this->budget2;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the flg an n.
     *
     * @return bool Returns the flg an n.
     */
    public function getFlgAnN() {
        return $this->flgAnN;
    }

    /**
     * Get the flg an n1.
     *
     * @return bool Returns the flg an n1.
     */
    public function getFlgAnN1() {
        return $this->flgAnN1;
    }

    /**
     * Get the flg an n2.
     *
     * @return bool Returns the flg an n2.
     */
    public function getFlgAnN2() {
        return $this->flgAnN2;
    }

    /**
     * Get the flg budget1.
     *
     * @return bool Returns the flg budget1.
     */
    public function getFlgBudget1() {
        return $this->flgBudget1;
    }

    /**
     * Get the flg budget2.
     *
     * @return bool Returns the flg budget2.
     */
    public function getFlgBudget2() {
        return $this->flgBudget2;
    }

    /**
     * Get the fmt dec.
     *
     * @return int Returns the fmt dec.
     */
    public function getFmtDec() {
        return $this->fmtDec;
    }

    /**
     * Get the fmt int.
     *
     * @return int Returns the fmt int.
     */
    public function getFmtInt() {
        return $this->fmtInt;
    }

    /**
     * Get the memo.
     *
     * @return string Returns the memo.
     */
    public function getMemo() {
        return $this->memo;
    }

    /**
     * Get the no conv euro.
     *
     * @return bool Returns the no conv euro.
     */
    public function getNoConvEuro() {
        return $this->noConvEuro;
    }

    /**
     * Get the regle.
     *
     * @return string Returns the regle.
     */
    public function getRegle() {
        return $this->regle;
    }

    /**
     * Get the rub.
     *
     * @return string Returns the rub.
     */
    public function getRub() {
        return $this->rub;
    }

    /**
     * Get the type zone.
     *
     * @return string Returns the type zone.
     */
    public function getTypeZone() {
        return $this->typeZone;
    }

    /**
     * Set the alpha.
     *
     * @param string $alpha The alpha.
     */
    public function setAlpha($alpha) {
        $this->alpha = $alpha;
        return $this;
    }

    /**
     * Set the an n.
     *
     * @param float $anN The an n.
     */
    public function setAnN($anN) {
        $this->anN = $anN;
        return $this;
    }

    /**
     * Set the an n1.
     *
     * @param float $anN1 The an n1.
     */
    public function setAnN1($anN1) {
        $this->anN1 = $anN1;
        return $this;
    }

    /**
     * Set the an n2.
     *
     * @param float $anN2 The an n2.
     */
    public function setAnN2($anN2) {
        $this->anN2 = $anN2;
        return $this;
    }

    /**
     * Set the budget1.
     *
     * @param float $budget1 The budget1.
     */
    public function setBudget1($budget1) {
        $this->budget1 = $budget1;
        return $this;
    }

    /**
     * Set the budget2.
     *
     * @param float $budget2 The budget2.
     */
    public function setBudget2($budget2) {
        $this->budget2 = $budget2;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the flg an n.
     *
     * @param bool $flgAnN The flg an n.
     */
    public function setFlgAnN($flgAnN) {
        $this->flgAnN = $flgAnN;
        return $this;
    }

    /**
     * Set the flg an n1.
     *
     * @param bool $flgAnN1 The flg an n1.
     */
    public function setFlgAnN1($flgAnN1) {
        $this->flgAnN1 = $flgAnN1;
        return $this;
    }

    /**
     * Set the flg an n2.
     *
     * @param bool $flgAnN2 The flg an n2.
     */
    public function setFlgAnN2($flgAnN2) {
        $this->flgAnN2 = $flgAnN2;
        return $this;
    }

    /**
     * Set the flg budget1.
     *
     * @param bool $flgBudget1 The flg budget1.
     */
    public function setFlgBudget1($flgBudget1) {
        $this->flgBudget1 = $flgBudget1;
        return $this;
    }

    /**
     * Set the flg budget2.
     *
     * @param bool $flgBudget2 The flg budget2.
     */
    public function setFlgBudget2($flgBudget2) {
        $this->flgBudget2 = $flgBudget2;
        return $this;
    }

    /**
     * Set the fmt dec.
     *
     * @param int $fmtDec The fmt dec.
     */
    public function setFmtDec($fmtDec) {
        $this->fmtDec = $fmtDec;
        return $this;
    }

    /**
     * Set the fmt int.
     *
     * @param int $fmtInt The fmt int.
     */
    public function setFmtInt($fmtInt) {
        $this->fmtInt = $fmtInt;
        return $this;
    }

    /**
     * Set the memo.
     *
     * @param string $memo The memo.
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Set the no conv euro.
     *
     * @param bool $noConvEuro The no conv euro.
     */
    public function setNoConvEuro($noConvEuro) {
        $this->noConvEuro = $noConvEuro;
        return $this;
    }

    /**
     * Set the regle.
     *
     * @param string $regle The regle.
     */
    public function setRegle($regle) {
        $this->regle = $regle;
        return $this;
    }

    /**
     * Set the rub.
     *
     * @param string $rub The rub.
     */
    public function setRub($rub) {
        $this->rub = $rub;
        return $this;
    }

    /**
     * Set the type zone.
     *
     * @param string $typeZone The type zone.
     */
    public function setTypeZone($typeZone) {
        $this->typeZone = $typeZone;
        return $this;
    }
}
