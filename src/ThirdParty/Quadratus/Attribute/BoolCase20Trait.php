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
 * Case20 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase20Trait {

    /**
     * Case20.
     *
     * @var bool
     */
    private $case20;

    /**
     * Get the case20.
     *
     * @return bool Returns the case20.
     */
    public function getCase20() {
        return $this->case20;
    }

    /**
     * Set the case20.
     *
     * @param bool $case20 The case20.
     */
    public function setCase20($case20) {
        $this->case20 = $case20;
        return $this;
    }
}
