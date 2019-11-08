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
 * Regroupement.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Regroupement {

    /**
     * Classe.
     *
     * @var string
     */
    private $classe;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the classe.
     *
     * @return string Returns the classe.
     */
    public function getClasse() {
        return $this->classe;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Set the classe.
     *
     * @param string $classe The classe.
     */
    public function setClasse($classe) {
        $this->classe = $classe;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }
}
