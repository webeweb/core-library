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
 * Mt elem calcul97 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMtElemCalcul97Trait {

    /**
     * Mt elem calcul97.
     *
     * @var int
     */
    private $mtElemCalcul97;

    /**
     * Get the mt elem calcul97.
     *
     * @return int Returns the mt elem calcul97.
     */
    public function getMtElemCalcul97() {
        return $this->mtElemCalcul97;
    }

    /**
     * Set the mt elem calcul97.
     *
     * @param int $mtElemCalcul97 The mt elem calcul97.
     */
    public function setMtElemCalcul97($mtElemCalcul97) {
        $this->mtElemCalcul97 = $mtElemCalcul97;
        return $this;
    }
}
