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
 * Plafond fsh trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondFshTrait {

    /**
     * Plafond fsh.
     *
     * @var float
     */
    private $plafondFsh;

    /**
     * Get the plafond fsh.
     *
     * @return float Returns the plafond fsh.
     */
    public function getPlafondFsh() {
        return $this->plafondFsh;
    }

    /**
     * Set the plafond fsh.
     *
     * @param float $plafondFsh The plafond fsh.
     */
    public function setPlafondFsh($plafondFsh) {
        $this->plafondFsh = $plafondFsh;
        return $this;
    }
}
