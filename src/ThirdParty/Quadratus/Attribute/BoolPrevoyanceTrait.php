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
 * Prevoyance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrevoyanceTrait {

    /**
     * Prevoyance.
     *
     * @var bool
     */
    private $prevoyance;

    /**
     * Get the prevoyance.
     *
     * @return bool Returns the prevoyance.
     */
    public function getPrevoyance() {
        return $this->prevoyance;
    }

    /**
     * Set the prevoyance.
     *
     * @param bool $prevoyance The prevoyance.
     */
    public function setPrevoyance($prevoyance) {
        $this->prevoyance = $prevoyance;
        return $this;
    }
}
