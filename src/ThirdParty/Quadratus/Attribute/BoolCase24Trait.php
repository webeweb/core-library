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
 * Case24 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase24Trait {

    /**
     * Case24.
     *
     * @var bool
     */
    private $case24;

    /**
     * Get the case24.
     *
     * @return bool Returns the case24.
     */
    public function getCase24() {
        return $this->case24;
    }

    /**
     * Set the case24.
     *
     * @param bool $case24 The case24.
     */
    public function setCase24($case24) {
        $this->case24 = $case24;
        return $this;
    }
}
