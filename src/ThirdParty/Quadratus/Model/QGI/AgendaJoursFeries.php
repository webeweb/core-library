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
 * Agenda jours feries.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AgendaJoursFeries {

    /**
     * Calculee.
     *
     * @var bool
     */
    private $calculee;

    /**
     * Date feriee.
     *
     * @var DateTime|null
     */
    private $dateFeriee;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the calculee.
     *
     * @return bool Returns the calculee.
     */
    public function getCalculee() {
        return $this->calculee;
    }

    /**
     * Get the date feriee.
     *
     * @return DateTime|null Returns the date feriee.
     */
    public function getDateFeriee() {
        return $this->dateFeriee;
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
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the calculee.
     *
     * @param bool $calculee The calculee.
     */
    public function setCalculee($calculee) {
        $this->calculee = $calculee;
        return $this;
    }

    /**
     * Set the date feriee.
     *
     * @param DateTime|null $dateFeriee The date feriee.
     */
    public function setDateFeriee(DateTime $dateFeriee = null) {
        $this->dateFeriee = $dateFeriee;
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
     * Set the type.
     *
     * @param string $type The type.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
