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
 * Evo cddcdi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEvoCddcdiTrait {

    /**
     * Evo cddcdi.
     *
     * @var bool
     */
    private $evoCddcdi;

    /**
     * Get the evo cddcdi.
     *
     * @return bool Returns the evo cddcdi.
     */
    public function getEvoCddcdi() {
        return $this->evoCddcdi;
    }

    /**
     * Set the evo cddcdi.
     *
     * @param bool $evoCddcdi The evo cddcdi.
     */
    public function setEvoCddcdi($evoCddcdi) {
        $this->evoCddcdi = $evoCddcdi;
        return $this;
    }
}
