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
 * Case40 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase40Trait {

    /**
     * Case40.
     *
     * @var bool
     */
    private $case40;

    /**
     * Get the case40.
     *
     * @return bool Returns the case40.
     */
    public function getCase40() {
        return $this->case40;
    }

    /**
     * Set the case40.
     *
     * @param bool $case40 The case40.
     */
    public function setCase40($case40) {
        $this->case40 = $case40;
        return $this;
    }
}
