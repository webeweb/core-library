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
 * Hebdo mens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHebdoMensTrait {

    /**
     * Hebdo mens.
     *
     * @var string
     */
    private $hebdoMens;

    /**
     * Get the hebdo mens.
     *
     * @return string Returns the hebdo mens.
     */
    public function getHebdoMens() {
        return $this->hebdoMens;
    }

    /**
     * Set the hebdo mens.
     *
     * @param string $hebdoMens The hebdo mens.
     */
    public function setHebdoMens($hebdoMens) {
        $this->hebdoMens = $hebdoMens;
        return $this;
    }
}
