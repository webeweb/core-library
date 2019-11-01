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
 * Mt elem calcul98 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMtElemCalcul98Trait {

    /**
     * Mt elem calcul98.
     *
     * @var int
     */
    private $mtElemCalcul98;

    /**
     * Get the mt elem calcul98.
     *
     * @return int Returns the mt elem calcul98.
     */
    public function getMtElemCalcul98() {
        return $this->mtElemCalcul98;
    }

    /**
     * Set the mt elem calcul98.
     *
     * @param int $mtElemCalcul98 The mt elem calcul98.
     */
    public function setMtElemCalcul98($mtElemCalcul98) {
        $this->mtElemCalcul98 = $mtElemCalcul98;
        return $this;
    }
}
