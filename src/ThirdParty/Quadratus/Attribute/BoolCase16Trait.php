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
 * Case16 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase16Trait {

    /**
     * Case16.
     *
     * @var bool
     */
    private $case16;

    /**
     * Get the case16.
     *
     * @return bool Returns the case16.
     */
    public function getCase16() {
        return $this->case16;
    }

    /**
     * Set the case16.
     *
     * @param bool $case16 The case16.
     */
    public function setCase16($case16) {
        $this->case16 = $case16;
        return $this;
    }
}
