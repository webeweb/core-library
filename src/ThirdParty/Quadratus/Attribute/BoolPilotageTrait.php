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
 * Pilotage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPilotageTrait {

    /**
     * Pilotage.
     *
     * @var bool
     */
    private $pilotage;

    /**
     * Get the pilotage.
     *
     * @return bool Returns the pilotage.
     */
    public function getPilotage() {
        return $this->pilotage;
    }

    /**
     * Set the pilotage.
     *
     * @param bool $pilotage The pilotage.
     */
    public function setPilotage($pilotage) {
        $this->pilotage = $pilotage;
        return $this;
    }
}
