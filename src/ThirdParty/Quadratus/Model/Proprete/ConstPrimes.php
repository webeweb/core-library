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

/**
 * Const primes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ConstPrimes {

    /**
     * Code prime q paie.
     *
     * @var string
     */
    private $codePrimeQPaie;

    /**
     * Indice.
     *
     * @var int
     */
    private $indice;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code prime q paie.
     *
     * @return string Returns the code prime q paie.
     */
    public function getCodePrimeQPaie() {
        return $this->codePrimeQPaie;
    }

    /**
     * Get the indice.
     *
     * @return int Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
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
     * Set the code prime q paie.
     *
     * @param string $codePrimeQPaie The code prime q paie.
     */
    public function setCodePrimeQPaie($codePrimeQPaie) {
        $this->codePrimeQPaie = $codePrimeQPaie;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int $indice The indice.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
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
}
