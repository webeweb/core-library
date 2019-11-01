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
 * Brut csg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutCsgTrait {

    /**
     * Brut csg.
     *
     * @var float
     */
    private $brutCsg;

    /**
     * Get the brut csg.
     *
     * @return float Returns the brut csg.
     */
    public function getBrutCsg() {
        return $this->brutCsg;
    }

    /**
     * Set the brut csg.
     *
     * @param float $brutCsg The brut csg.
     */
    public function setBrutCsg($brutCsg) {
        $this->brutCsg = $brutCsg;
        return $this;
    }
}
