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
 * Fillon adom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFillonAdomTrait {

    /**
     * Fillon adom.
     *
     * @var bool
     */
    private $fillonAdom;

    /**
     * Get the fillon adom.
     *
     * @return bool Returns the fillon adom.
     */
    public function getFillonAdom() {
        return $this->fillonAdom;
    }

    /**
     * Set the fillon adom.
     *
     * @param bool $fillonAdom The fillon adom.
     */
    public function setFillonAdom($fillonAdom) {
        $this->fillonAdom = $fillonAdom;
        return $this;
    }
}
