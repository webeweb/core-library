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
 * Evo crcca4 bis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEvoCrcca4BisTrait {

    /**
     * Evo crcca4 bis.
     *
     * @var bool
     */
    private $evoCrcca4Bis;

    /**
     * Get the evo crcca4 bis.
     *
     * @return bool Returns the evo crcca4 bis.
     */
    public function getEvoCrcca4Bis() {
        return $this->evoCrcca4Bis;
    }

    /**
     * Set the evo crcca4 bis.
     *
     * @param bool $evoCrcca4Bis The evo crcca4 bis.
     */
    public function setEvoCrcca4Bis($evoCrcca4Bis) {
        $this->evoCrcca4Bis = $evoCrcca4Bis;
        return $this;
    }
}
