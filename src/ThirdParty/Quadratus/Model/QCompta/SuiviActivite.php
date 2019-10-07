<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Suivi activite model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class SuiviActivite {

    /**
     * Code coll.
     *
     * @var string
     */
    private $codeColl;

    /**
     * Date heure.
     *
     * @var DateTime
     */
    private $dateHeure;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * Id action.
     *
     * @var int
     */
    private $idAction;

    /**
     * Resultat.
     *
     * @var string
     */
    private $resultat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code coll.
     *
     * @return string Returns the code coll.
     */
    public function getCodeColl() {
        return $this->codeColl;
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
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the id action.
     *
     * @return int Returns the id action.
     */
    public function getIdAction() {
        return $this->idAction;
    }

    /**
     * Get the resultat.
     *
     * @return string Returns the resultat.
     */
    public function getResultat() {
        return $this->resultat;
    }

    /**
     * Set the code coll.
     *
     * @param string $codeColl The code coll.
     * @return SuiviActivite Returns this suivi activite.
     */
    public function setCodeColl($codeColl) {
        $this->codeColl = $codeColl;
        return $this;
    }

    /**
     * Set the date heure.
     *
     * @param DateTime $dateHeure The date heure.
     * @return SuiviActivite Returns this suivi activite.
     */
    public function setDateHeure(DateTime $dateHeure = null) {
        $this->dateHeure = $dateHeure;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return SuiviActivite Returns this suivi activite.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the id action.
     *
     * @param int $idAction The id action.
     * @return SuiviActivite Returns this suivi activite.
     */
    public function setIdAction($idAction) {
        $this->idAction = $idAction;
        return $this;
    }

    /**
     * Set the resultat.
     *
     * @param string $resultat The resultat.
     * @return SuiviActivite Returns this suivi activite.
     */
    public function setResultat($resultat) {
        $this->resultat = $resultat;
        return $this;
    }
}
