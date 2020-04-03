<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Ventilations auto.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class VentilationsAuto {

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Code ventilation.
     *
     * @var string
     */
    private $codeVentilation;

    /**
     * Compte ventilation.
     *
     * @var string
     */
    private $compteVentilation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code journal.
     *
     * @return string Returns the code journal.
     */
    public function getCodeJournal() {
        return $this->codeJournal;
    }

    /**
     * Get the code ventilation.
     *
     * @return string Returns the code ventilation.
     */
    public function getCodeVentilation() {
        return $this->codeVentilation;
    }

    /**
     * Get the compte ventilation.
     *
     * @return string Returns the compte ventilation.
     */
    public function getCompteVentilation() {
        return $this->compteVentilation;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     * @return VentilationsAuto Returns this Ventilations auto.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code ventilation.
     *
     * @param string $codeVentilation The code ventilation.
     * @return VentilationsAuto Returns this Ventilations auto.
     */
    public function setCodeVentilation($codeVentilation) {
        $this->codeVentilation = $codeVentilation;
        return $this;
    }

    /**
     * Set the compte ventilation.
     *
     * @param string $compteVentilation The compte ventilation.
     * @return VentilationsAuto Returns this Ventilations auto.
     */
    public function setCompteVentilation($compteVentilation) {
        $this->compteVentilation = $compteVentilation;
        return $this;
    }
}
