<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Cle repartition entetes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class CleRepartitionEntetes {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Total.
     *
     * @var float
     */
    private $total;

    /**
     * Type cle.
     *
     * @var string
     */
    private $typeCle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
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
     * Get the total.
     *
     * @return float Returns the total.
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Get the type cle.
     *
     * @return string Returns the type cle.
     */
    public function getTypeCle() {
        return $this->typeCle;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return CleRepartitionEntetes Returns this cle repartition entetes.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return CleRepartitionEntetes Returns this cle repartition entetes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the total.
     *
     * @param float $total The total.
     * @return CleRepartitionEntetes Returns this cle repartition entetes.
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * Set the type cle.
     *
     * @param string $typeCle The type cle.
     * @return CleRepartitionEntetes Returns this cle repartition entetes.
     */
    public function setTypeCle($typeCle) {
        $this->typeCle = $typeCle;
        return $this;
    }
}
