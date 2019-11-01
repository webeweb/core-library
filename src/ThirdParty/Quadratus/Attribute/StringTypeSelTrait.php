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
 * Type sel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSelTrait {

    /**
     * Type sel.
     *
     * @var string
     */
    private $typeSel;

    /**
     * Get the type sel.
     *
     * @return string Returns the type sel.
     */
    public function getTypeSel() {
        return $this->typeSel;
    }

    /**
     * Set the type sel.
     *
     * @param string $typeSel The type sel.
     */
    public function setTypeSel($typeSel) {
        $this->typeSel = $typeSel;
        return $this;
    }
}
