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
 * Case11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase11Trait {

    /**
     * Case11.
     *
     * @var bool
     */
    private $case11;

    /**
     * Get the case11.
     *
     * @return bool Returns the case11.
     */
    public function getCase11() {
        return $this->case11;
    }

    /**
     * Set the case11.
     *
     * @param bool $case11 The case11.
     */
    public function setCase11($case11) {
        $this->case11 = $case11;
        return $this;
    }
}
