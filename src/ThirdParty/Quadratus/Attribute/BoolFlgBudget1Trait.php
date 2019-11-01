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
 * Flg budget1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFlgBudget1Trait {

    /**
     * Flg budget1.
     *
     * @var bool
     */
    private $flgBudget1;

    /**
     * Get the flg budget1.
     *
     * @return bool Returns the flg budget1.
     */
    public function getFlgBudget1() {
        return $this->flgBudget1;
    }

    /**
     * Set the flg budget1.
     *
     * @param bool $flgBudget1 The flg budget1.
     */
    public function setFlgBudget1($flgBudget1) {
        $this->flgBudget1 = $flgBudget1;
        return $this;
    }
}
