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
 * Case23 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase23Trait {

    /**
     * Case23.
     *
     * @var bool
     */
    private $case23;

    /**
     * Get the case23.
     *
     * @return bool Returns the case23.
     */
    public function getCase23() {
        return $this->case23;
    }

    /**
     * Set the case23.
     *
     * @param bool $case23 The case23.
     */
    public function setCase23($case23) {
        $this->case23 = $case23;
        return $this;
    }
}
