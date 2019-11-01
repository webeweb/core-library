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
 * Qualif unite temps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualifUniteTempsTrait {

    /**
     * Qualif unite temps.
     *
     * @var string
     */
    private $qualifUniteTemps;

    /**
     * Get the qualif unite temps.
     *
     * @return string Returns the qualif unite temps.
     */
    public function getQualifUniteTemps() {
        return $this->qualifUniteTemps;
    }

    /**
     * Set the qualif unite temps.
     *
     * @param string $qualifUniteTemps The qualif unite temps.
     */
    public function setQualifUniteTemps($qualifUniteTemps) {
        $this->qualifUniteTemps = $qualifUniteTemps;
        return $this;
    }
}
