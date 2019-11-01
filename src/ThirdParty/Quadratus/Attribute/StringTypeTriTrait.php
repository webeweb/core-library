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
 * Type tri trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTriTrait {

    /**
     * Type tri.
     *
     * @var string
     */
    private $typeTri;

    /**
     * Get the type tri.
     *
     * @return string Returns the type tri.
     */
    public function getTypeTri() {
        return $this->typeTri;
    }

    /**
     * Set the type tri.
     *
     * @param string $typeTri The type tri.
     */
    public function setTypeTri($typeTri) {
        $this->typeTri = $typeTri;
        return $this;
    }
}
