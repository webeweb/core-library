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
 * Case29 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase29Trait {

    /**
     * Case29.
     *
     * @var bool
     */
    private $case29;

    /**
     * Get the case29.
     *
     * @return bool Returns the case29.
     */
    public function getCase29() {
        return $this->case29;
    }

    /**
     * Set the case29.
     *
     * @param bool $case29 The case29.
     */
    public function setCase29($case29) {
        $this->case29 = $case29;
        return $this;
    }
}
