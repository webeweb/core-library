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
 * Af duree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAfDureeTrait {

    /**
     * Af duree.
     *
     * @var float
     */
    private $afDuree;

    /**
     * Get the af duree.
     *
     * @return float Returns the af duree.
     */
    public function getAfDuree() {
        return $this->afDuree;
    }

    /**
     * Set the af duree.
     *
     * @param float $afDuree The af duree.
     */
    public function setAfDuree($afDuree) {
        $this->afDuree = $afDuree;
        return $this;
    }
}
