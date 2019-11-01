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
 * Jrn format trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJrnFormatTrait {

    /**
     * Jrn format.
     *
     * @var string
     */
    private $jrnFormat;

    /**
     * Get the jrn format.
     *
     * @return string Returns the jrn format.
     */
    public function getJrnFormat() {
        return $this->jrnFormat;
    }

    /**
     * Set the jrn format.
     *
     * @param string $jrnFormat The jrn format.
     */
    public function setJrnFormat($jrnFormat) {
        $this->jrnFormat = $jrnFormat;
        return $this;
    }
}
