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
 * Type majo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeMajoTrait {

    /**
     * Type majo.
     *
     * @var string
     */
    private $typeMajo;

    /**
     * Get the type majo.
     *
     * @return string Returns the type majo.
     */
    public function getTypeMajo() {
        return $this->typeMajo;
    }

    /**
     * Set the type majo.
     *
     * @param string $typeMajo The type majo.
     */
    public function setTypeMajo($typeMajo) {
        $this->typeMajo = $typeMajo;
        return $this;
    }
}
