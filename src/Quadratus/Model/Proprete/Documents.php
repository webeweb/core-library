<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Documents model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class Documents {

    /**
     * Chrono.
     *
     * @var int
     */
    private $chrono;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Date heure sys.
     *
     * @var DateTime
     */
    private $dateHeureSys;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the chrono.
     *
     * @return int Returns the chrono.
     */
    public function getChrono() {
        return $this->chrono;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code nature.
     *
     * @return string Returns the code nature.
     */
    public function getCodeNature() {
        return $this->codeNature;
    }

    /**
     * Get the date heure sys.
     *
     * @return DateTime Returns the date heure sys.
     */
    public function getDateHeureSys() {
        return $this->dateHeureSys;
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
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
    }

    /**
     * Set the chrono.
     *
     * @param int $chrono The chrono.
     * @return Documents Returns this documents.
     */
    public function setChrono($chrono) {
        $this->chrono = $chrono;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Documents Returns this documents.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     * @return Documents Returns this documents.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the date heure sys.
     *
     * @param DateTime $dateHeureSys The date heure sys.
     * @return Documents Returns this documents.
     */
    public function setDateHeureSys(DateTime $dateHeureSys = null) {
        $this->dateHeureSys = $dateHeureSys;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Documents Returns this documents.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return Documents Returns this documents.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

}
