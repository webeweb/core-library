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
 * Designation5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDesignation5Trait {

    /**
     * Designation5.
     *
     * @var string
     */
    private $designation5;

    /**
     * Get the designation5.
     *
     * @return string Returns the designation5.
     */
    public function getDesignation5() {
        return $this->designation5;
    }

    /**
     * Set the designation5.
     *
     * @param string $designation5 The designation5.
     */
    public function setDesignation5($designation5) {
        $this->designation5 = $designation5;
        return $this;
    }
}
