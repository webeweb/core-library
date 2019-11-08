<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Collab tache.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CollabTache {

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Pv1.
     *
     * @var float
     */
    private $pv1;

    /**
     * Pv2.
     *
     * @var float
     */
    private $pv2;

    /**
     * Pv3.
     *
     * @var float
     */
    private $pv3;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collab.
     *
     * @return string Returns the code collab.
     */
    public function getCodeCollab() {
        return $this->codeCollab;
    }

    /**
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the pv1.
     *
     * @return float Returns the pv1.
     */
    public function getPv1() {
        return $this->pv1;
    }

    /**
     * Get the pv2.
     *
     * @return float Returns the pv2.
     */
    public function getPv2() {
        return $this->pv2;
    }

    /**
     * Get the pv3.
     *
     * @return float Returns the pv3.
     */
    public function getPv3() {
        return $this->pv3;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the pv1.
     *
     * @param float $pv1 The pv1.
     */
    public function setPv1($pv1) {
        $this->pv1 = $pv1;
        return $this;
    }

    /**
     * Set the pv2.
     *
     * @param float $pv2 The pv2.
     */
    public function setPv2($pv2) {
        $this->pv2 = $pv2;
        return $this;
    }

    /**
     * Set the pv3.
     *
     * @param float $pv3 The pv3.
     */
    public function setPv3($pv3) {
        $this->pv3 = $pv3;
        return $this;
    }
}
