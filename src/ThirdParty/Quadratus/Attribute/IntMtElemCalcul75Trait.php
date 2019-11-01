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
 * Mt elem calcul75 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMtElemCalcul75Trait {

    /**
     * Mt elem calcul75.
     *
     * @var int
     */
    private $mtElemCalcul75;

    /**
     * Get the mt elem calcul75.
     *
     * @return int Returns the mt elem calcul75.
     */
    public function getMtElemCalcul75() {
        return $this->mtElemCalcul75;
    }

    /**
     * Set the mt elem calcul75.
     *
     * @param int $mtElemCalcul75 The mt elem calcul75.
     */
    public function setMtElemCalcul75($mtElemCalcul75) {
        $this->mtElemCalcul75 = $mtElemCalcul75;
        return $this;
    }
}
