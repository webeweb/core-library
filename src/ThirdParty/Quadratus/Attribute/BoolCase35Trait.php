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
 * Case35 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase35Trait {

    /**
     * Case35.
     *
     * @var bool
     */
    private $case35;

    /**
     * Get the case35.
     *
     * @return bool Returns the case35.
     */
    public function getCase35() {
        return $this->case35;
    }

    /**
     * Set the case35.
     *
     * @param bool $case35 The case35.
     */
    public function setCase35($case35) {
        $this->case35 = $case35;
        return $this;
    }
}
