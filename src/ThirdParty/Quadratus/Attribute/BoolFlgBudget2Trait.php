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
 * Flg budget2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFlgBudget2Trait {

    /**
     * Flg budget2.
     *
     * @var bool
     */
    private $flgBudget2;

    /**
     * Get the flg budget2.
     *
     * @return bool Returns the flg budget2.
     */
    public function getFlgBudget2() {
        return $this->flgBudget2;
    }

    /**
     * Set the flg budget2.
     *
     * @param bool $flgBudget2 The flg budget2.
     */
    public function setFlgBudget2($flgBudget2) {
        $this->flgBudget2 = $flgBudget2;
        return $this;
    }
}
