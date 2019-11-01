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
 * Tp periodicite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTpPeriodiciteTrait {

    /**
     * Tp periodicite.
     *
     * @var string
     */
    private $tpPeriodicite;

    /**
     * Get the tp periodicite.
     *
     * @return string Returns the tp periodicite.
     */
    public function getTpPeriodicite() {
        return $this->tpPeriodicite;
    }

    /**
     * Set the tp periodicite.
     *
     * @param string $tpPeriodicite The tp periodicite.
     */
    public function setTpPeriodicite($tpPeriodicite) {
        $this->tpPeriodicite = $tpPeriodicite;
        return $this;
    }
}
