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
 * Code periodicite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePeriodiciteTrait {

    /**
     * Code periodicite.
     *
     * @var string
     */
    private $codePeriodicite;

    /**
     * Get the code periodicite.
     *
     * @return string Returns the code periodicite.
     */
    public function getCodePeriodicite() {
        return $this->codePeriodicite;
    }

    /**
     * Set the code periodicite.
     *
     * @param string $codePeriodicite The code periodicite.
     */
    public function setCodePeriodicite($codePeriodicite) {
        $this->codePeriodicite = $codePeriodicite;
        return $this;
    }
}
