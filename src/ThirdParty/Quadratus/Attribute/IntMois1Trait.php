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
 * Mois1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMois1Trait {

    /**
     * Mois1.
     *
     * @var int
     */
    private $mois1;

    /**
     * Get the mois1.
     *
     * @return int Returns the mois1.
     */
    public function getMois1() {
        return $this->mois1;
    }

    /**
     * Set the mois1.
     *
     * @param int $mois1 The mois1.
     */
    public function setMois1($mois1) {
        $this->mois1 = $mois1;
        return $this;
    }
}
