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
 * Type ca trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCaTrait {

    /**
     * Type ca.
     *
     * @var string
     */
    private $typeCa;

    /**
     * Get the type ca.
     *
     * @return string Returns the type ca.
     */
    public function getTypeCa() {
        return $this->typeCa;
    }

    /**
     * Set the type ca.
     *
     * @param string $typeCa The type ca.
     */
    public function setTypeCa($typeCa) {
        $this->typeCa = $typeCa;
        return $this;
    }
}
