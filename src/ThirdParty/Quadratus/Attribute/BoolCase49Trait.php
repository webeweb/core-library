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
 * Case49 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase49Trait {

    /**
     * Case49.
     *
     * @var bool
     */
    private $case49;

    /**
     * Get the case49.
     *
     * @return bool Returns the case49.
     */
    public function getCase49() {
        return $this->case49;
    }

    /**
     * Set the case49.
     *
     * @param bool $case49 The case49.
     */
    public function setCase49($case49) {
        $this->case49 = $case49;
        return $this;
    }
}
