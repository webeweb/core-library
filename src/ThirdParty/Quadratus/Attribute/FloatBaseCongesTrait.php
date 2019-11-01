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
 * Base conges trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseCongesTrait {

    /**
     * Base conges.
     *
     * @var float
     */
    private $baseConges;

    /**
     * Get the base conges.
     *
     * @return float Returns the base conges.
     */
    public function getBaseConges() {
        return $this->baseConges;
    }

    /**
     * Set the base conges.
     *
     * @param float $baseConges The base conges.
     */
    public function setBaseConges($baseConges) {
        $this->baseConges = $baseConges;
        return $this;
    }
}
