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
 * Case41 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase41Trait {

    /**
     * Case41.
     *
     * @var bool
     */
    private $case41;

    /**
     * Get the case41.
     *
     * @return bool Returns the case41.
     */
    public function getCase41() {
        return $this->case41;
    }

    /**
     * Set the case41.
     *
     * @param bool $case41 The case41.
     */
    public function setCase41($case41) {
        $this->case41 = $case41;
        return $this;
    }
}
