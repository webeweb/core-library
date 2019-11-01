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
 * Mt csg100 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCsg100Trait {

    /**
     * Mt csg100.
     *
     * @var float
     */
    private $mtCsg100;

    /**
     * Get the mt csg100.
     *
     * @return float Returns the mt csg100.
     */
    public function getMtCsg100() {
        return $this->mtCsg100;
    }

    /**
     * Set the mt csg100.
     *
     * @param float $mtCsg100 The mt csg100.
     */
    public function setMtCsg100($mtCsg100) {
        $this->mtCsg100 = $mtCsg100;
        return $this;
    }
}
