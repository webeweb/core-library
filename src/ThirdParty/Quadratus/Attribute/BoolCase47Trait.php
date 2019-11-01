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
 * Case47 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase47Trait {

    /**
     * Case47.
     *
     * @var bool
     */
    private $case47;

    /**
     * Get the case47.
     *
     * @return bool Returns the case47.
     */
    public function getCase47() {
        return $this->case47;
    }

    /**
     * Set the case47.
     *
     * @param bool $case47 The case47.
     */
    public function setCase47($case47) {
        $this->case47 = $case47;
        return $this;
    }
}
