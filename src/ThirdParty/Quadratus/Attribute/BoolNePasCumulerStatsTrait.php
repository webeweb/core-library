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
 * Ne pas cumuler stats trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePasCumulerStatsTrait {

    /**
     * Ne pas cumuler stats.
     *
     * @var bool
     */
    private $nePasCumulerStats;

    /**
     * Get the ne pas cumuler stats.
     *
     * @return bool Returns the ne pas cumuler stats.
     */
    public function getNePasCumulerStats() {
        return $this->nePasCumulerStats;
    }

    /**
     * Set the ne pas cumuler stats.
     *
     * @param bool $nePasCumulerStats The ne pas cumuler stats.
     */
    public function setNePasCumulerStats($nePasCumulerStats) {
        $this->nePasCumulerStats = $nePasCumulerStats;
        return $this;
    }
}
