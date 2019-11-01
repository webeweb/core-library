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
 * Case37 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase37Trait {

    /**
     * Case37.
     *
     * @var bool
     */
    private $case37;

    /**
     * Get the case37.
     *
     * @return bool Returns the case37.
     */
    public function getCase37() {
        return $this->case37;
    }

    /**
     * Set the case37.
     *
     * @param bool $case37 The case37.
     */
    public function setCase37($case37) {
        $this->case37 = $case37;
        return $this;
    }
}
