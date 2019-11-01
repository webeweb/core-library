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
 * Indemnite cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemniteCpTrait {

    /**
     * Indemnite cp.
     *
     * @var float
     */
    private $indemniteCp;

    /**
     * Get the indemnite cp.
     *
     * @return float Returns the indemnite cp.
     */
    public function getIndemniteCp() {
        return $this->indemniteCp;
    }

    /**
     * Set the indemnite cp.
     *
     * @param float $indemniteCp The indemnite cp.
     */
    public function setIndemniteCp($indemniteCp) {
        $this->indemniteCp = $indemniteCp;
        return $this;
    }
}
