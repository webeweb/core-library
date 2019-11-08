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
 * Budget entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class BudgetEntetes {

    /**
     * Arrondi.
     *
     * @var string
     */
    private $arrondi;

    /**
     * Code budget.
     *
     * @var string
     */
    private $codeBudget;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Num col ref.
     *
     * @var int
     */
    private $numColRef;

    /**
     * Periode debut.
     *
     * @var DateTime|null
     */
    private $periodeDebut;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Ref image.
     *
     * @var string
     */
    private $refImage;

    /**
     * Type col ref.
     *
     * @var string
     */
    private $typeColRef;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the arrondi.
     *
     * @return string Returns the arrondi.
     */
    public function getArrondi() {
        return $this->arrondi;
    }

    /**
     * Get the code budget.
     *
     * @return string Returns the code budget.
     */
    public function getCodeBudget() {
        return $this->codeBudget;
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
     * Get the num col ref.
     *
     * @return int Returns the num col ref.
     */
    public function getNumColRef() {
        return $this->numColRef;
    }

    /**
     * Get the periode debut.
     *
     * @return DateTime|null Returns the periode debut.
     */
    public function getPeriodeDebut() {
        return $this->periodeDebut;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin() {
        return $this->periodeFin;
    }

    /**
     * Get the ref image.
     *
     * @return string Returns the ref image.
     */
    public function getRefImage() {
        return $this->refImage;
    }

    /**
     * Get the type col ref.
     *
     * @return string Returns the type col ref.
     */
    public function getTypeColRef() {
        return $this->typeColRef;
    }

    /**
     * Set the arrondi.
     *
     * @param string $arrondi The arrondi.
     */
    public function setArrondi($arrondi) {
        $this->arrondi = $arrondi;
        return $this;
    }

    /**
     * Set the code budget.
     *
     * @param string $codeBudget The code budget.
     */
    public function setCodeBudget($codeBudget) {
        $this->codeBudget = $codeBudget;
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
     * Set the num col ref.
     *
     * @param int $numColRef The num col ref.
     */
    public function setNumColRef($numColRef) {
        $this->numColRef = $numColRef;
        return $this;
    }

    /**
     * Set the periode debut.
     *
     * @param DateTime|null $periodeDebut The periode debut.
     */
    public function setPeriodeDebut(DateTime $periodeDebut = null) {
        $this->periodeDebut = $periodeDebut;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the type col ref.
     *
     * @param string $typeColRef The type col ref.
     */
    public function setTypeColRef($typeColRef) {
        $this->typeColRef = $typeColRef;
        return $this;
    }
}
