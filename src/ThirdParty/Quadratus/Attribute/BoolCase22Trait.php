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
 * Case22 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase22Trait {

    /**
     * Case22.
     *
     * @var bool
     */
    private $case22;

    /**
     * Get the case22.
     *
     * @return bool Returns the case22.
     */
    public function getCase22() {
        return $this->case22;
    }

    /**
     * Set the case22.
     *
     * @param bool $case22 The case22.
     */
    public function setCase22($case22) {
        $this->case22 = $case22;
        return $this;
    }
}
