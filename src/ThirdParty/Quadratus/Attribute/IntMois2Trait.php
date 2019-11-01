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
 * Mois2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMois2Trait {

    /**
     * Mois2.
     *
     * @var int
     */
    private $mois2;

    /**
     * Get the mois2.
     *
     * @return int Returns the mois2.
     */
    public function getMois2() {
        return $this->mois2;
    }

    /**
     * Set the mois2.
     *
     * @param int $mois2 The mois2.
     */
    public function setMois2($mois2) {
        $this->mois2 = $mois2;
        return $this;
    }
}
