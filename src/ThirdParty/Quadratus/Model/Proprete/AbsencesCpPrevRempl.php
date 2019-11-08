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

use DateTime;

/**
 * Absences cp prev rempl.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesCpPrevRempl {

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code remplacant.
     *
     * @var string
     */
    private $codeRemplacant;

    /**
     * Date debut cp.
     *
     * @var DateTime|null
     */
    private $dateDebutCp;

    /**
     * Date debut rempl.
     *
     * @var DateTime|null
     */
    private $dateDebutRempl;

    /**
     * Date fin rempl.
     *
     * @var DateTime|null
     */
    private $dateFinRempl;

    /**
     * Indice.
     *
     * @var string
     */
    private $indice;

    /**
     * Type rempl.
     *
     * @var string
     */
    private $typeRempl;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the code remplacant.
     *
     * @return string Returns the code remplacant.
     */
    public function getCodeRemplacant() {
        return $this->codeRemplacant;
    }

    /**
     * Get the date debut cp.
     *
     * @return DateTime|null Returns the date debut cp.
     */
    public function getDateDebutCp() {
        return $this->dateDebutCp;
    }

    /**
     * Get the date debut rempl.
     *
     * @return DateTime|null Returns the date debut rempl.
     */
    public function getDateDebutRempl() {
        return $this->dateDebutRempl;
    }

    /**
     * Get the date fin rempl.
     *
     * @return DateTime|null Returns the date fin rempl.
     */
    public function getDateFinRempl() {
        return $this->dateFinRempl;
    }

    /**
     * Get the indice.
     *
     * @return string Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
    }

    /**
     * Get the type rempl.
     *
     * @return string Returns the type rempl.
     */
    public function getTypeRempl() {
        return $this->typeRempl;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code remplacant.
     *
     * @param string $codeRemplacant The code remplacant.
     */
    public function setCodeRemplacant($codeRemplacant) {
        $this->codeRemplacant = $codeRemplacant;
        return $this;
    }

    /**
     * Set the date debut cp.
     *
     * @param DateTime|null $dateDebutCp The date debut cp.
     */
    public function setDateDebutCp(DateTime $dateDebutCp = null) {
        $this->dateDebutCp = $dateDebutCp;
        return $this;
    }

    /**
     * Set the date debut rempl.
     *
     * @param DateTime|null $dateDebutRempl The date debut rempl.
     */
    public function setDateDebutRempl(DateTime $dateDebutRempl = null) {
        $this->dateDebutRempl = $dateDebutRempl;
        return $this;
    }

    /**
     * Set the date fin rempl.
     *
     * @param DateTime|null $dateFinRempl The date fin rempl.
     */
    public function setDateFinRempl(DateTime $dateFinRempl = null) {
        $this->dateFinRempl = $dateFinRempl;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string $indice The indice.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the type rempl.
     *
     * @param string $typeRempl The type rempl.
     */
    public function setTypeRempl($typeRempl) {
        $this->typeRempl = $typeRempl;
        return $this;
    }
}
