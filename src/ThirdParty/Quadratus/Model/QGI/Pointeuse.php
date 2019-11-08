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
 * Pointeuse.
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
     * @var DateTime|null
     */
    private $dateHeureSysteme;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Id pointeuse.
     *
     * @var int
     */
    private $idPointeuse;

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
     * @return DateTime|null Returns the date heure systeme.
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
     * Get the id pointeuse.
     *
     * @return int Returns the id pointeuse.
     */
    public function getIdPointeuse() {
        return $this->idPointeuse;
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
     * Set the date heure systeme.
     *
     * @param DateTime|null $dateHeureSysteme The date heure systeme.
     */
    public function setDateHeureSysteme(DateTime $dateHeureSysteme = null) {
        $this->dateHeureSysteme = $dateHeureSysteme;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the id pointeuse.
     *
     * @param int $idPointeuse The id pointeuse.
     */
    public function setIdPointeuse($idPointeuse) {
        $this->idPointeuse = $idPointeuse;
        return $this;
    }
}
