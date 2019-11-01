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
 * Case25 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase25Trait {

    /**
     * Case25.
     *
     * @var bool
     */
    private $case25;

    /**
     * Get the case25.
     *
     * @return bool Returns the case25.
     */
    public function getCase25() {
        return $this->case25;
    }

    /**
     * Set the case25.
     *
     * @param bool $case25 The case25.
     */
    public function setCase25($case25) {
        $this->case25 = $case25;
        return $this;
    }
}
