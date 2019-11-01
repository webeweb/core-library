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
 * Base af trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseAfTrait {

    /**
     * Base af.
     *
     * @var float
     */
    private $baseAf;

    /**
     * Get the base af.
     *
     * @return float Returns the base af.
     */
    public function getBaseAf() {
        return $this->baseAf;
    }

    /**
     * Set the base af.
     *
     * @param float $baseAf The base af.
     */
    public function setBaseAf($baseAf) {
        $this->baseAf = $baseAf;
        return $this;
    }
}
