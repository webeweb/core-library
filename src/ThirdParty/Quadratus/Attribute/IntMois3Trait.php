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
 * Mois3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMois3Trait {

    /**
     * Mois3.
     *
     * @var int
     */
    private $mois3;

    /**
     * Get the mois3.
     *
     * @return int Returns the mois3.
     */
    public function getMois3() {
        return $this->mois3;
    }

    /**
     * Set the mois3.
     *
     * @param int $mois3 The mois3.
     */
    public function setMois3($mois3) {
        $this->mois3 = $mois3;
        return $this;
    }
}
