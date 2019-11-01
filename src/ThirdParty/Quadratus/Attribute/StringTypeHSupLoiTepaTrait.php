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
 * Type h sup loi tepa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeHSupLoiTepaTrait {

    /**
     * Type h sup loi tepa.
     *
     * @var string
     */
    private $typeHSupLoiTepa;

    /**
     * Get the type h sup loi tepa.
     *
     * @return string Returns the type h sup loi tepa.
     */
    public function getTypeHSupLoiTepa() {
        return $this->typeHSupLoiTepa;
    }

    /**
     * Set the type h sup loi tepa.
     *
     * @param string $typeHSupLoiTepa The type h sup loi tepa.
     */
    public function setTypeHSupLoiTepa($typeHSupLoiTepa) {
        $this->typeHSupLoiTepa = $typeHSupLoiTepa;
        return $this;
    }
}
