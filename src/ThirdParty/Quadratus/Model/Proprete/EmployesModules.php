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
 * Employes modules model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class EmployesModules {

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Debut modulation.
     *
     * @var DateTime
     */
    private $debutModulation;

    /**
     * Ecart cumule init.
     *
     * @var float
     */
    private $ecartCumuleInit;

    /**
     * Fin modulation.
     *
     * @var DateTime
     */
    private $finModulation;

    /**
     * Periode ecart cumule.
     *
     * @var DateTime
     */
    private $periodeEcartCumule;

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
     * Get the debut modulation.
     *
     * @return DateTime Returns the debut modulation.
     */
    public function getDebutModulation() {
        return $this->debutModulation;
    }

    /**
     * Get the ecart cumule init.
     *
     * @return float Returns the ecart cumule init.
     */
    public function getEcartCumuleInit() {
        return $this->ecartCumuleInit;
    }

    /**
     * Get the fin modulation.
     *
     * @return DateTime Returns the fin modulation.
     */
    public function getFinModulation() {
        return $this->finModulation;
    }

    /**
     * Get the periode ecart cumule.
     *
     * @return DateTime Returns the periode ecart cumule.
     */
    public function getPeriodeEcartCumule() {
        return $this->periodeEcartCumule;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return EmployesModules Returns this employes modules.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the debut modulation.
     *
     * @param DateTime $debutModulation The debut modulation.
     * @return EmployesModules Returns this employes modules.
     */
    public function setDebutModulation(DateTime $debutModulation = null) {
        $this->debutModulation = $debutModulation;
        return $this;
    }

    /**
     * Set the ecart cumule init.
     *
     * @param float $ecartCumuleInit The ecart cumule init.
     * @return EmployesModules Returns this employes modules.
     */
    public function setEcartCumuleInit($ecartCumuleInit) {
        $this->ecartCumuleInit = $ecartCumuleInit;
        return $this;
    }

    /**
     * Set the fin modulation.
     *
     * @param DateTime $finModulation The fin modulation.
     * @return EmployesModules Returns this employes modules.
     */
    public function setFinModulation(DateTime $finModulation = null) {
        $this->finModulation = $finModulation;
        return $this;
    }

    /**
     * Set the periode ecart cumule.
     *
     * @param DateTime $periodeEcartCumule The periode ecart cumule.
     * @return EmployesModules Returns this employes modules.
     */
    public function setPeriodeEcartCumule(DateTime $periodeEcartCumule = null) {
        $this->periodeEcartCumule = $periodeEcartCumule;
        return $this;
    }
}
