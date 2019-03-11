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
 * Post it model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class PostIt {

    /**
     * Code coll dest.
     *
     * @var string
     */
    private $codeCollDest;

    /**
     * Code coll org.
     *
     * @var string
     */
    private $codeCollOrg;

    /**
     * Date heure.
     *
     * @var DateTime
     */
    private $dateHeure;

    /**
     * Date sys saisie.
     *
     * @var DateTime
     */
    private $dateSysSaisie;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Ref g u i d.
     *
     * @var string
     */
    private $refGUID;

    /**
     * Type.
     *
     * @var int
     */
    private $type;

    /**
     * Uniq i d.
     *
     * @var string
     */
    private $uniqID;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code coll dest.
     *
     * @return string Returns the code coll dest.
     */
    public function getCodeCollDest() {
        return $this->codeCollDest;
    }

    /**
     * Get the code coll org.
     *
     * @return string Returns the code coll org.
     */
    public function getCodeCollOrg() {
        return $this->codeCollOrg;
    }

    /**
     * Get the date heure.
     *
     * @return DateTime Returns the date heure.
     */
    public function getDateHeure() {
        return $this->dateHeure;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime Returns the date sys saisie.
     */
    public function getDateSysSaisie() {
        return $this->dateSysSaisie;
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
     * Get the ref g u i d.
     *
     * @return string Returns the ref g u i d.
     */
    public function getRefGUID() {
        return $this->refGUID;
    }

    /**
     * Get the type.
     *
     * @return int Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the uniq i d.
     *
     * @return string Returns the uniq i d.
     */
    public function getUniqID() {
        return $this->uniqID;
    }

    /**
     * Set the code coll dest.
     *
     * @param string $codeCollDest The code coll dest.
     * @return PostIt Returns this post it.
     */
    public function setCodeCollDest($codeCollDest) {
        $this->codeCollDest = $codeCollDest;
        return $this;
    }

    /**
     * Set the code coll org.
     *
     * @param string $codeCollOrg The code coll org.
     * @return PostIt Returns this post it.
     */
    public function setCodeCollOrg($codeCollOrg) {
        $this->codeCollOrg = $codeCollOrg;
        return $this;
    }

    /**
     * Set the date heure.
     *
     * @param DateTime $dateHeure The date heure.
     * @return PostIt Returns this post it.
     */
    public function setDateHeure(DateTime $dateHeure = null) {
        $this->dateHeure = $dateHeure;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime $dateSysSaisie The date sys saisie.
     * @return PostIt Returns this post it.
     */
    public function setDateSysSaisie(DateTime $dateSysSaisie = null) {
        $this->dateSysSaisie = $dateSysSaisie;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return PostIt Returns this post it.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the ref g u i d.
     *
     * @param string $refGUID The ref g u i d.
     * @return PostIt Returns this post it.
     */
    public function setRefGUID($refGUID) {
        $this->refGUID = $refGUID;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int $type The type.
     * @return PostIt Returns this post it.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return PostIt Returns this post it.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }
}
