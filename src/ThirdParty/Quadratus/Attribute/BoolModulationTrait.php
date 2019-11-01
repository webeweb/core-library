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
 * Modulation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolModulationTrait {

    /**
     * Modulation.
     *
     * @var bool
     */
    private $modulation;

    /**
     * Get the modulation.
     *
     * @return bool Returns the modulation.
     */
    public function getModulation() {
        return $this->modulation;
    }

    /**
     * Set the modulation.
     *
     * @param bool $modulation The modulation.
     */
    public function setModulation($modulation) {
        $this->modulation = $modulation;
        return $this;
    }
}
