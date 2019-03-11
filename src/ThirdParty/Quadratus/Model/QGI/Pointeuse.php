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

use DateTime;

/**
 * Pointeuse model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Pointeuse {

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Date heure systeme.
     *
     * @var DateTime
     */
    private $dateHeureSysteme;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * I d pointeuse.
     *
     * @var int
     */
    private $iDPointeuse;

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
     * Get the date heure systeme.
     *
     * @return DateTime Returns the date heure systeme.
     */
    public function getDateHeureSysteme() {
        return $this->dateHeureSysteme;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the i d pointeuse.
     *
     * @return int Returns the i d pointeuse.
     */
    public function getIDPointeuse() {
        return $this->iDPointeuse;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return Pointeuse Returns this pointeuse.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the date heure systeme.
     *
     * @param DateTime $dateHeureSysteme The date heure systeme.
     * @return Pointeuse Returns this pointeuse.
     */
    public function setDateHeureSysteme(DateTime $dateHeureSysteme = null) {
        $this->dateHeureSysteme = $dateHeureSysteme;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return Pointeuse Returns this pointeuse.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the i d pointeuse.
     *
     * @param int $iDPointeuse The i d pointeuse.
     * @return Pointeuse Returns this pointeuse.
     */
    public function setIDPointeuse($iDPointeuse) {
        $this->iDPointeuse = $iDPointeuse;
        return $this;
    }
}
