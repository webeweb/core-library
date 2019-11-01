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
 * Utilise quantite2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUtiliseQuantite2Trait {

    /**
     * Utilise quantite2.
     *
     * @var bool
     */
    private $utiliseQuantite2;

    /**
     * Get the utilise quantite2.
     *
     * @return bool Returns the utilise quantite2.
     */
    public function getUtiliseQuantite2() {
        return $this->utiliseQuantite2;
    }

    /**
     * Set the utilise quantite2.
     *
     * @param bool $utiliseQuantite2 The utilise quantite2.
     */
    public function setUtiliseQuantite2($utiliseQuantite2) {
        $this->utiliseQuantite2 = $utiliseQuantite2;
        return $this;
    }
}
