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
 * Jrn type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJrnTypeTrait {

    /**
     * Jrn type.
     *
     * @var string
     */
    private $jrnType;

    /**
     * Get the jrn type.
     *
     * @return string Returns the jrn type.
     */
    public function getJrnType() {
        return $this->jrnType;
    }

    /**
     * Set the jrn type.
     *
     * @param string $jrnType The jrn type.
     */
    public function setJrnType($jrnType) {
        $this->jrnType = $jrnType;
        return $this;
    }
}
