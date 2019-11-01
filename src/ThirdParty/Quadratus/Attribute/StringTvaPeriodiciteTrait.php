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
 * Tva periodicite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaPeriodiciteTrait {

    /**
     * Tva periodicite.
     *
     * @var string
     */
    private $tvaPeriodicite;

    /**
     * Get the tva periodicite.
     *
     * @return string Returns the tva periodicite.
     */
    public function getTvaPeriodicite() {
        return $this->tvaPeriodicite;
    }

    /**
     * Set the tva periodicite.
     *
     * @param string $tvaPeriodicite The tva periodicite.
     */
    public function setTvaPeriodicite($tvaPeriodicite) {
        $this->tvaPeriodicite = $tvaPeriodicite;
        return $this;
    }
}
