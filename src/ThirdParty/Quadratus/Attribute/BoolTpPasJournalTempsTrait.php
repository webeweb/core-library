<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Tp pas journal temps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpPasJournalTempsTrait {

    /**
     * Tp pas journal temps.
     *
     * @var bool
     */
    private $tpPasJournalTemps;

    /**
     * Get the tp pas journal temps.
     *
     * @return bool Returns the tp pas journal temps.
     */
    public function getTpPasJournalTemps() {
        return $this->tpPasJournalTemps;
    }

    /**
     * Set the tp pas journal temps.
     *
     * @param bool $tpPasJournalTemps The tp pas journal temps.
     */
    public function setTpPasJournalTemps($tpPasJournalTemps) {
        $this->tpPasJournalTemps = $tpPasJournalTemps;
        return $this;
    }
}
