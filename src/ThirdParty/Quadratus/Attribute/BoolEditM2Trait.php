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
 * Edit m2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditM2Trait {

    /**
     * Edit m2.
     *
     * @var bool
     */
    private $editM2;

    /**
     * Get the edit m2.
     *
     * @return bool Returns the edit m2.
     */
    public function getEditM2() {
        return $this->editM2;
    }

    /**
     * Set the edit m2.
     *
     * @param bool $editM2 The edit m2.
     */
    public function setEditM2($editM2) {
        $this->editM2 = $editM2;
        return $this;
    }
}
