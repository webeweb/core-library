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
 * Case27 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase27Trait {

    /**
     * Case27.
     *
     * @var bool
     */
    private $case27;

    /**
     * Get the case27.
     *
     * @return bool Returns the case27.
     */
    public function getCase27() {
        return $this->case27;
    }

    /**
     * Set the case27.
     *
     * @param bool $case27 The case27.
     */
    public function setCase27($case27) {
        $this->case27 = $case27;
        return $this;
    }
}
