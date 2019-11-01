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
 * Via trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringViaTrait {

    /**
     * Via.
     *
     * @var string
     */
    private $via;

    /**
     * Get the via.
     *
     * @return string Returns the via.
     */
    public function getVia() {
        return $this->via;
    }

    /**
     * Set the via.
     *
     * @param string $via The via.
     */
    public function setVia($via) {
        $this->via = $via;
        return $this;
    }
}
