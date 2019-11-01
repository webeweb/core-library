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
 * Case13 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase13Trait {

    /**
     * Case13.
     *
     * @var bool
     */
    private $case13;

    /**
     * Get the case13.
     *
     * @return bool Returns the case13.
     */
    public function getCase13() {
        return $this->case13;
    }

    /**
     * Set the case13.
     *
     * @param bool $case13 The case13.
     */
    public function setCase13($case13) {
        $this->case13 = $case13;
        return $this;
    }
}
