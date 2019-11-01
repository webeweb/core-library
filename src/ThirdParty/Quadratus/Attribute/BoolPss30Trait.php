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
 * Pss30 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPss30Trait {

    /**
     * Pss30.
     *
     * @var bool
     */
    private $pss30;

    /**
     * Get the pss30.
     *
     * @return bool Returns the pss30.
     */
    public function getPss30() {
        return $this->pss30;
    }

    /**
     * Set the pss30.
     *
     * @param bool $pss30 The pss30.
     */
    public function setPss30($pss30) {
        $this->pss30 = $pss30;
        return $this;
    }
}
