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
 * Post it.
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
     * @var DateTime|null
     */
    private $dateHeure;

    /**
     * Date sys saisie.
     *
     * @var DateTime|null
     */
    private $dateSysSaisie;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Ref guid.
     *
     * @var string
     */
    private $refGuid;

    /**
     * Type.
     *
     * @var int
     */
    private $type;

    /**
     * Uniq id.
     *
     * @var string
     */
    private $uniqId;

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
     * @return DateTime|null Returns the date heure.
     */
    public function getDateHeure() {
        return $this->dateHeure;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime|null Returns the date sys saisie.
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
     * Get the ref guid.
     *
     * @return string Returns the ref guid.
     */
    public function getRefGuid() {
        return $this->refGuid;
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
     * Get the uniq id.
     *
     * @return string Returns the uniq id.
     */
    public function getUniqId() {
        return $this->uniqId;
    }

    /**
     * Set the code coll dest.
     *
     * @param string $codeCollDest The code coll dest.
     */
    public function setCodeCollDest($codeCollDest) {
        $this->codeCollDest = $codeCollDest;
        return $this;
    }

    /**
     * Set the code coll org.
     *
     * @param string $codeCollOrg The code coll org.
     */
    public function setCodeCollOrg($codeCollOrg) {
        $this->codeCollOrg = $codeCollOrg;
        return $this;
    }

    /**
     * Set the date heure.
     *
     * @param DateTime|null $dateHeure The date heure.
     */
    public function setDateHeure(DateTime $dateHeure = null) {
        $this->dateHeure = $dateHeure;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime|null $dateSysSaisie The date sys saisie.
     */
    public function setDateSysSaisie(DateTime $dateSysSaisie = null) {
        $this->dateSysSaisie = $dateSysSaisie;
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
     * Set the ref guid.
     *
     * @param string $refGuid The ref guid.
     */
    public function setRefGuid($refGuid) {
        $this->refGuid = $refGuid;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int $type The type.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }
}
