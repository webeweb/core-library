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
 * Nb h act part indem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHActPartIndemTrait {

    /**
     * Nb h act part indem.
     *
     * @var float
     */
    private $nbHActPartIndem;

    /**
     * Get the nb h act part indem.
     *
     * @return float Returns the nb h act part indem.
     */
    public function getNbHActPartIndem() {
        return $this->nbHActPartIndem;
    }

    /**
     * Set the nb h act part indem.
     *
     * @param float $nbHActPartIndem The nb h act part indem.
     */
    public function setNbHActPartIndem($nbHActPartIndem) {
        $this->nbHActPartIndem = $nbHActPartIndem;
        return $this;
    }
}
