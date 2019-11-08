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
 * Taches semaine.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class TachesSemaine {

    /**
     * Auto incr.
     *
     * @var int
     */
    private $autoIncr;

    /**
     * Code semaine tache.
     *
     * @var string
     */
    private $codeSemaineTache;

    /**
     * Discr tache.
     *
     * @var int
     */
    private $discrTache;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the auto incr.
     *
     * @return int Returns the auto incr.
     */
    public function getAutoIncr() {
        return $this->autoIncr;
    }

    /**
     * Get the code semaine tache.
     *
     * @return string Returns the code semaine tache.
     */
    public function getCodeSemaineTache() {
        return $this->codeSemaineTache;
    }

    /**
     * Get the discr tache.
     *
     * @return int Returns the discr tache.
     */
    public function getDiscrTache() {
        return $this->discrTache;
    }

    /**
     * Set the auto incr.
     *
     * @param int $autoIncr The auto incr.
     */
    public function setAutoIncr($autoIncr) {
        $this->autoIncr = $autoIncr;
        return $this;
    }

    /**
     * Set the code semaine tache.
     *
     * @param string $codeSemaineTache The code semaine tache.
     */
    public function setCodeSemaineTache($codeSemaineTache) {
        $this->codeSemaineTache = $codeSemaineTache;
        return $this;
    }

    /**
     * Set the discr tache.
     *
     * @param int $discrTache The discr tache.
     */
    public function setDiscrTache($discrTache) {
        $this->discrTache = $discrTache;
        return $this;
    }
}
