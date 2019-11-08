<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Historiques employes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HistoriquesEmployes {

    /**
     * Chapitre.
     *
     * @var string
     */
    private $chapitre;

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
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * G uniq id.
     *
     * @var string
     */
    private $gUniqId;

    /**
     * Indice.
     *
     * @var int
     */
    private $indice;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the chapitre.
     *
     * @return string Returns the chapitre.
     */
    public function getChapitre() {
        return $this->chapitre;
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
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the g uniq id.
     *
     * @return string Returns the g uniq id.
     */
    public function getGUniqId() {
        return $this->gUniqId;
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
     * Set the chapitre.
     *
     * @param string $chapitre The chapitre.
     */
    public function setChapitre($chapitre) {
        $this->chapitre = $chapitre;
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
     * Set the description.
     *
     * @param string $description The description.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the g uniq id.
     *
     * @param string $gUniqId The g uniq id.
     */
    public function setGUniqId($gUniqId) {
        $this->gUniqId = $gUniqId;
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
}
