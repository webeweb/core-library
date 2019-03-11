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
 * Absences c p prev rempl model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesCPPrevRempl {

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
     * Date debut c p.
     *
     * @var DateTime
     */
    private $dateDebutCP;

    /**
     * Date debut rempl.
     *
     * @var DateTime
     */
    private $dateDebutRempl;

    /**
     * Date fin rempl.
     *
     * @var DateTime
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
     * Get the date debut c p.
     *
     * @return DateTime Returns the date debut c p.
     */
    public function getDateDebutCP() {
        return $this->dateDebutCP;
    }

    /**
     * Get the date debut rempl.
     *
     * @return DateTime Returns the date debut rempl.
     */
    public function getDateDebutRempl() {
        return $this->dateDebutRempl;
    }

    /**
     * Get the date fin rempl.
     *
     * @return DateTime Returns the date fin rempl.
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
     * @return AbsencesCPPrevRempl Returns this absences c p prev rempl.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code remplacant.
     *
     * @param string $codeRemplacant The code remplacant.
     * @return AbsencesCPPrevRempl Returns this absences c p prev rempl.
     */
    public function setCodeRemplacant($codeRemplacant) {
        $this->codeRemplacant = $codeRemplacant;
        return $this;
    }

    /**
     * Set the date debut c p.
     *
     * @param DateTime $dateDebutCP The date debut c p.
     * @return AbsencesCPPrevRempl Returns this absences c p prev rempl.
     */
    public function setDateDebutCP(DateTime $dateDebutCP = null) {
        $this->dateDebutCP = $dateDebutCP;
        return $this;
    }

    /**
     * Set the date debut rempl.
     *
     * @param DateTime $dateDebutRempl The date debut rempl.
     * @return AbsencesCPPrevRempl Returns this absences c p prev rempl.
     */
    public function setDateDebutRempl(DateTime $dateDebutRempl = null) {
        $this->dateDebutRempl = $dateDebutRempl;
        return $this;
    }

    /**
     * Set the date fin rempl.
     *
     * @param DateTime $dateFinRempl The date fin rempl.
     * @return AbsencesCPPrevRempl Returns this absences c p prev rempl.
     */
    public function setDateFinRempl(DateTime $dateFinRempl = null) {
        $this->dateFinRempl = $dateFinRempl;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string $indice The indice.
     * @return AbsencesCPPrevRempl Returns this absences c p prev rempl.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the type rempl.
     *
     * @param string $typeRempl The type rempl.
     * @return AbsencesCPPrevRempl Returns this absences c p prev rempl.
     */
    public function setTypeRempl($typeRempl) {
        $this->typeRempl = $typeRempl;
        return $this;
    }
}
