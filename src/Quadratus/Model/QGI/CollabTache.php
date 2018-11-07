<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * Collab tache model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
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
     * P v1.
     *
     * @var float
     */
    private $pV1;

    /**
     * P v2.
     *
     * @var float
     */
    private $pV2;

    /**
     * P v3.
     *
     * @var float
     */
    private $pV3;

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
     * Get the p v1.
     *
     * @return float Returns the p v1.
     */
    public function getPV1() {
        return $this->pV1;
    }

    /**
     * Get the p v2.
     *
     * @return float Returns the p v2.
     */
    public function getPV2() {
        return $this->pV2;
    }

    /**
     * Get the p v3.
     *
     * @return float Returns the p v3.
     */
    public function getPV3() {
        return $this->pV3;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return CollabTache Returns this collab tache.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return CollabTache Returns this collab tache.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the p v1.
     *
     * @param float $pV1 The p v1.
     * @return CollabTache Returns this collab tache.
     */
    public function setPV1($pV1) {
        $this->pV1 = $pV1;
        return $this;
    }

    /**
     * Set the p v2.
     *
     * @param float $pV2 The p v2.
     * @return CollabTache Returns this collab tache.
     */
    public function setPV2($pV2) {
        $this->pV2 = $pV2;
        return $this;
    }

    /**
     * Set the p v3.
     *
     * @param float $pV3 The p v3.
     * @return CollabTache Returns this collab tache.
     */
    public function setPV3($pV3) {
        $this->pV3 = $pV3;
        return $this;
    }

}
