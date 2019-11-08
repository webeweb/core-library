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
 * Stats perso suivi client tetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class StatsPersoSuiviClientTetes {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Coll creat.
     *
     * @var string
     */
    private $collCreat;

    /**
     * Coll modif.
     *
     * @var string
     */
    private $collModif;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

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
     * Lst collab.
     *
     * @var string
     */
    private $lstCollab;

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
     * Get the coll creat.
     *
     * @return string Returns the coll creat.
     */
    public function getCollCreat() {
        return $this->collCreat;
    }

    /**
     * Get the coll modif.
     *
     * @return string Returns the coll modif.
     */
    public function getCollModif() {
        return $this->collModif;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat() {
        return $this->dateCreat;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
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
     * Get the lst collab.
     *
     * @return string Returns the lst collab.
     */
    public function getLstCollab() {
        return $this->lstCollab;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the coll creat.
     *
     * @param string $collCreat The coll creat.
     */
    public function setCollCreat($collCreat) {
        $this->collCreat = $collCreat;
        return $this;
    }

    /**
     * Set the coll modif.
     *
     * @param string $collModif The coll modif.
     */
    public function setCollModif($collModif) {
        $this->collModif = $collModif;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     */
    public function setDateCreat(DateTime $dateCreat = null) {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
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

    /**
     * Set the lst collab.
     *
     * @param string $lstCollab The lst collab.
     */
    public function setLstCollab($lstCollab) {
        $this->lstCollab = $lstCollab;
        return $this;
    }
}
