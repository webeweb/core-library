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
 * Total remuneration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTotalRemunerationTrait {

    /**
     * Total remuneration.
     *
     * @var int
     */
    private $totalRemuneration;

    /**
     * Get the total remuneration.
     *
     * @return int Returns the total remuneration.
     */
    public function getTotalRemuneration() {
        return $this->totalRemuneration;
    }

    /**
     * Set the total remuneration.
     *
     * @param int $totalRemuneration The total remuneration.
     */
    public function setTotalRemuneration($totalRemuneration) {
        $this->totalRemuneration = $totalRemuneration;
        return $this;
    }
}
