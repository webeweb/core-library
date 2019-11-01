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
 * Mt elem calcul60 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMtElemCalcul60Trait {

    /**
     * Mt elem calcul60.
     *
     * @var int
     */
    private $mtElemCalcul60;

    /**
     * Get the mt elem calcul60.
     *
     * @return int Returns the mt elem calcul60.
     */
    public function getMtElemCalcul60() {
        return $this->mtElemCalcul60;
    }

    /**
     * Set the mt elem calcul60.
     *
     * @param int $mtElemCalcul60 The mt elem calcul60.
     */
    public function setMtElemCalcul60($mtElemCalcul60) {
        $this->mtElemCalcul60 = $mtElemCalcul60;
        return $this;
    }
}
