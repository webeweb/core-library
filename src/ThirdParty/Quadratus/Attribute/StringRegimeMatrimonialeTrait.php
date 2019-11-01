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
 * Regime matrimoniale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegimeMatrimonialeTrait {

    /**
     * Regime matrimoniale.
     *
     * @var string
     */
    private $regimeMatrimoniale;

    /**
     * Get the regime matrimoniale.
     *
     * @return string Returns the regime matrimoniale.
     */
    public function getRegimeMatrimoniale() {
        return $this->regimeMatrimoniale;
    }

    /**
     * Set the regime matrimoniale.
     *
     * @param string $regimeMatrimoniale The regime matrimoniale.
     */
    public function setRegimeMatrimoniale($regimeMatrimoniale) {
        $this->regimeMatrimoniale = $regimeMatrimoniale;
        return $this;
    }
}
