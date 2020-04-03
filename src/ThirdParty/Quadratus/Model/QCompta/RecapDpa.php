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
 * Recap dpa.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class RecapDpa {

    /**
     * Aleas climat.
     *
     * @var float
     */
    private $aleasClimat;

    /**
     * Aleas eco.
     *
     * @var float
     */
    private $aleasEco;

    /**
     * Annee ded.
     *
     * @var int
     */
    private $anneeDed;

    /**
     * Annee utilisation.
     *
     * @var int
     */
    private $anneeUtilisation;

    /**
     * Autres.
     *
     * @var float
     */
    private $autres;

    /**
     * Franch dommages.
     *
     * @var float
     */
    private $franchDommages;

    /**
     * Mtt annee.
     *
     * @var float
     */
    private $mttAnnee;

    /**
     * Primes franch.
     *
     * @var float
     */
    private $primesFranch;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the aleas climat.
     *
     * @return float Returns the aleas climat.
     */
    public function getAleasClimat() {
        return $this->aleasClimat;
    }

    /**
     * Get the aleas eco.
     *
     * @return float Returns the aleas eco.
     */
    public function getAleasEco() {
        return $this->aleasEco;
    }

    /**
     * Get the annee ded.
     *
     * @return int Returns the annee ded.
     */
    public function getAnneeDed() {
        return $this->anneeDed;
    }

    /**
     * Get the annee utilisation.
     *
     * @return int Returns the annee utilisation.
     */
    public function getAnneeUtilisation() {
        return $this->anneeUtilisation;
    }

    /**
     * Get the autres.
     *
     * @return float Returns the autres.
     */
    public function getAutres() {
        return $this->autres;
    }

    /**
     * Get the franch dommages.
     *
     * @return float Returns the franch dommages.
     */
    public function getFranchDommages() {
        return $this->franchDommages;
    }

    /**
     * Get the mtt annee.
     *
     * @return float Returns the mtt annee.
     */
    public function getMttAnnee() {
        return $this->mttAnnee;
    }

    /**
     * Get the primes franch.
     *
     * @return float Returns the primes franch.
     */
    public function getPrimesFranch() {
        return $this->primesFranch;
    }

    /**
     * Set the aleas climat.
     *
     * @param float $aleasClimat The aleas climat.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setAleasClimat($aleasClimat) {
        $this->aleasClimat = $aleasClimat;
        return $this;
    }

    /**
     * Set the aleas eco.
     *
     * @param float $aleasEco The aleas eco.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setAleasEco($aleasEco) {
        $this->aleasEco = $aleasEco;
        return $this;
    }

    /**
     * Set the annee ded.
     *
     * @param int $anneeDed The annee ded.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setAnneeDed($anneeDed) {
        $this->anneeDed = $anneeDed;
        return $this;
    }

    /**
     * Set the annee utilisation.
     *
     * @param int $anneeUtilisation The annee utilisation.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setAnneeUtilisation($anneeUtilisation) {
        $this->anneeUtilisation = $anneeUtilisation;
        return $this;
    }

    /**
     * Set the autres.
     *
     * @param float $autres The autres.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setAutres($autres) {
        $this->autres = $autres;
        return $this;
    }

    /**
     * Set the franch dommages.
     *
     * @param float $franchDommages The franch dommages.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setFranchDommages($franchDommages) {
        $this->franchDommages = $franchDommages;
        return $this;
    }

    /**
     * Set the mtt annee.
     *
     * @param float $mttAnnee The mtt annee.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setMttAnnee($mttAnnee) {
        $this->mttAnnee = $mttAnnee;
        return $this;
    }

    /**
     * Set the primes franch.
     *
     * @param float $primesFranch The primes franch.
     * @return RecapDpa Returns this Recap dpa.
     */
    public function setPrimesFranch($primesFranch) {
        $this->primesFranch = $primesFranch;
        return $this;
    }
}
