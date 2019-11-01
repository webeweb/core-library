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
 * Compte tiers1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteTiers1Trait {

    /**
     * Compte tiers1.
     *
     * @var string
     */
    private $compteTiers1;

    /**
     * Get the compte tiers1.
     *
     * @return string Returns the compte tiers1.
     */
    public function getCompteTiers1() {
        return $this->compteTiers1;
    }

    /**
     * Set the compte tiers1.
     *
     * @param string $compteTiers1 The compte tiers1.
     */
    public function setCompteTiers1($compteTiers1) {
        $this->compteTiers1 = $compteTiers1;
        return $this;
    }
}
