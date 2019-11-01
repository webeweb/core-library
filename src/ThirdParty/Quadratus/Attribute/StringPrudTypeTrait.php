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
 * Prud type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrudTypeTrait {

    /**
     * Prud type.
     *
     * @var string
     */
    private $prudType;

    /**
     * Get the prud type.
     *
     * @return string Returns the prud type.
     */
    public function getPrudType() {
        return $this->prudType;
    }

    /**
     * Set the prud type.
     *
     * @param string $prudType The prud type.
     */
    public function setPrudType($prudType) {
        $this->prudType = $prudType;
        return $this;
    }
}
