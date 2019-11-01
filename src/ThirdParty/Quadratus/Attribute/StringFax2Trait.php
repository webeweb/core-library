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
 * Fax2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFax2Trait {

    /**
     * Fax2.
     *
     * @var string
     */
    private $fax2;

    /**
     * Get the fax2.
     *
     * @return string Returns the fax2.
     */
    public function getFax2() {
        return $this->fax2;
    }

    /**
     * Set the fax2.
     *
     * @param string $fax2 The fax2.
     */
    public function setFax2($fax2) {
        $this->fax2 = $fax2;
        return $this;
    }
}
