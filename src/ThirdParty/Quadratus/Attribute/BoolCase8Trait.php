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
 * Case8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase8Trait {

    /**
     * Case8.
     *
     * @var bool
     */
    private $case8;

    /**
     * Get the case8.
     *
     * @return bool Returns the case8.
     */
    public function getCase8() {
        return $this->case8;
    }

    /**
     * Set the case8.
     *
     * @param bool $case8 The case8.
     */
    public function setCase8($case8) {
        $this->case8 = $case8;
        return $this;
    }
}
