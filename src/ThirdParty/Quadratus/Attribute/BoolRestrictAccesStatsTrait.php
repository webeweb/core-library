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
 * Restrict acces stats trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRestrictAccesStatsTrait {

    /**
     * Restrict acces stats.
     *
     * @var bool
     */
    private $restrictAccesStats;

    /**
     * Get the restrict acces stats.
     *
     * @return bool Returns the restrict acces stats.
     */
    public function getRestrictAccesStats() {
        return $this->restrictAccesStats;
    }

    /**
     * Set the restrict acces stats.
     *
     * @param bool $restrictAccesStats The restrict acces stats.
     */
    public function setRestrictAccesStats($restrictAccesStats) {
        $this->restrictAccesStats = $restrictAccesStats;
        return $this;
    }
}
