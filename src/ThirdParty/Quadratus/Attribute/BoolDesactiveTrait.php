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
 * Desactive trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDesactiveTrait {

    /**
     * Desactive.
     *
     * @var bool
     */
    private $desactive;

    /**
     * Get the desactive.
     *
     * @return bool Returns the desactive.
     */
    public function getDesactive() {
        return $this->desactive;
    }

    /**
     * Set the desactive.
     *
     * @param bool $desactive The desactive.
     */
    public function setDesactive($desactive) {
        $this->desactive = $desactive;
        return $this;
    }
}
