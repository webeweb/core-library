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
 * Compte tiers2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteTiers2Trait {

    /**
     * Compte tiers2.
     *
     * @var string
     */
    private $compteTiers2;

    /**
     * Get the compte tiers2.
     *
     * @return string Returns the compte tiers2.
     */
    public function getCompteTiers2() {
        return $this->compteTiers2;
    }

    /**
     * Set the compte tiers2.
     *
     * @param string $compteTiers2 The compte tiers2.
     */
    public function setCompteTiers2($compteTiers2) {
        $this->compteTiers2 = $compteTiers2;
        return $this;
    }
}
