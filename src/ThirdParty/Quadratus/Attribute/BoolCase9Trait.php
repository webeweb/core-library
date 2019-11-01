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
 * Case9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase9Trait {

    /**
     * Case9.
     *
     * @var bool
     */
    private $case9;

    /**
     * Get the case9.
     *
     * @return bool Returns the case9.
     */
    public function getCase9() {
        return $this->case9;
    }

    /**
     * Set the case9.
     *
     * @param bool $case9 The case9.
     */
    public function setCase9($case9) {
        $this->case9 = $case9;
        return $this;
    }
}
