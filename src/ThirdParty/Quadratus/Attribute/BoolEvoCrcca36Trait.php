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
 * Evo crcca36 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEvoCrcca36Trait {

    /**
     * Evo crcca36.
     *
     * @var bool
     */
    private $evoCrcca36;

    /**
     * Get the evo crcca36.
     *
     * @return bool Returns the evo crcca36.
     */
    public function getEvoCrcca36() {
        return $this->evoCrcca36;
    }

    /**
     * Set the evo crcca36.
     *
     * @param bool $evoCrcca36 The evo crcca36.
     */
    public function setEvoCrcca36($evoCrcca36) {
        $this->evoCrcca36 = $evoCrcca36;
        return $this;
    }
}
