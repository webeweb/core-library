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
 * Mt elem calcul65 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMtElemCalcul65Trait {

    /**
     * Mt elem calcul65.
     *
     * @var int
     */
    private $mtElemCalcul65;

    /**
     * Get the mt elem calcul65.
     *
     * @return int Returns the mt elem calcul65.
     */
    public function getMtElemCalcul65() {
        return $this->mtElemCalcul65;
    }

    /**
     * Set the mt elem calcul65.
     *
     * @param int $mtElemCalcul65 The mt elem calcul65.
     */
    public function setMtElemCalcul65($mtElemCalcul65) {
        $this->mtElemCalcul65 = $mtElemCalcul65;
        return $this;
    }
}
