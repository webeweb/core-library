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
 * Type prorata trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeProrataTrait {

    /**
     * Type prorata.
     *
     * @var string
     */
    private $typeProrata;

    /**
     * Get the type prorata.
     *
     * @return string Returns the type prorata.
     */
    public function getTypeProrata() {
        return $this->typeProrata;
    }

    /**
     * Set the type prorata.
     *
     * @param string $typeProrata The type prorata.
     */
    public function setTypeProrata($typeProrata) {
        $this->typeProrata = $typeProrata;
        return $this;
    }
}
