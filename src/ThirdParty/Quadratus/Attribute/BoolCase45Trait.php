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
 * Case45 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase45Trait {

    /**
     * Case45.
     *
     * @var bool
     */
    private $case45;

    /**
     * Get the case45.
     *
     * @return bool Returns the case45.
     */
    public function getCase45() {
        return $this->case45;
    }

    /**
     * Set the case45.
     *
     * @param bool $case45 The case45.
     */
    public function setCase45($case45) {
        $this->case45 = $case45;
        return $this;
    }
}
