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
 * Case44 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase44Trait {

    /**
     * Case44.
     *
     * @var bool
     */
    private $case44;

    /**
     * Get the case44.
     *
     * @return bool Returns the case44.
     */
    public function getCase44() {
        return $this->case44;
    }

    /**
     * Set the case44.
     *
     * @param bool $case44 The case44.
     */
    public function setCase44($case44) {
        $this->case44 = $case44;
        return $this;
    }
}
