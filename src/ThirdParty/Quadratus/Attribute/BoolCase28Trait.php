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
 * Case28 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase28Trait {

    /**
     * Case28.
     *
     * @var bool
     */
    private $case28;

    /**
     * Get the case28.
     *
     * @return bool Returns the case28.
     */
    public function getCase28() {
        return $this->case28;
    }

    /**
     * Set the case28.
     *
     * @param bool $case28 The case28.
     */
    public function setCase28($case28) {
        $this->case28 = $case28;
        return $this;
    }
}
