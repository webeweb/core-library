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
 * Journaux bloques model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class JournauxBloques {

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

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
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     * @return JournauxBloques Returns this journaux bloques.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return JournauxBloques Returns this journaux bloques.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }
}
