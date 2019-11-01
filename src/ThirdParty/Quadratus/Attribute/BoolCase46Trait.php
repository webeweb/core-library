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
 * Case46 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase46Trait {

    /**
     * Case46.
     *
     * @var bool
     */
    private $case46;

    /**
     * Get the case46.
     *
     * @return bool Returns the case46.
     */
    public function getCase46() {
        return $this->case46;
    }

    /**
     * Set the case46.
     *
     * @param bool $case46 The case46.
     */
    public function setCase46($case46) {
        $this->case46 = $case46;
        return $this;
    }
}
