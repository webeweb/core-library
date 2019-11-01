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
 * Intit col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntitColTrait {

    /**
     * Intit col.
     *
     * @var string
     */
    private $intitCol;

    /**
     * Get the intit col.
     *
     * @return string Returns the intit col.
     */
    public function getIntitCol() {
        return $this->intitCol;
    }

    /**
     * Set the intit col.
     *
     * @param string $intitCol The intit col.
     */
    public function setIntitCol($intitCol) {
        $this->intitCol = $intitCol;
        return $this;
    }
}
