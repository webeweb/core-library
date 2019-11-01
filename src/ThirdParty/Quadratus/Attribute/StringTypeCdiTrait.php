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
 * Type cdi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCdiTrait {

    /**
     * Type cdi.
     *
     * @var string
     */
    private $typeCdi;

    /**
     * Get the type cdi.
     *
     * @return string Returns the type cdi.
     */
    public function getTypeCdi() {
        return $this->typeCdi;
    }

    /**
     * Set the type cdi.
     *
     * @param string $typeCdi The type cdi.
     */
    public function setTypeCdi($typeCdi) {
        $this->typeCdi = $typeCdi;
        return $this;
    }
}
