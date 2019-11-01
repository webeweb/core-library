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
 * Case18 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase18Trait {

    /**
     * Case18.
     *
     * @var bool
     */
    private $case18;

    /**
     * Get the case18.
     *
     * @return bool Returns the case18.
     */
    public function getCase18() {
        return $this->case18;
    }

    /**
     * Set the case18.
     *
     * @param bool $case18 The case18.
     */
    public function setCase18($case18) {
        $this->case18 = $case18;
        return $this;
    }
}
