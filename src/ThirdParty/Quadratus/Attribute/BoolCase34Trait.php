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
 * Case34 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase34Trait {

    /**
     * Case34.
     *
     * @var bool
     */
    private $case34;

    /**
     * Get the case34.
     *
     * @return bool Returns the case34.
     */
    public function getCase34() {
        return $this->case34;
    }

    /**
     * Set the case34.
     *
     * @param bool $case34 The case34.
     */
    public function setCase34($case34) {
        $this->case34 = $case34;
        return $this;
    }
}
