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
 * Auto incr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAutoIncrTrait {

    /**
     * Auto incr.
     *
     * @var int
     */
    private $autoIncr;

    /**
     * Get the auto incr.
     *
     * @return int Returns the auto incr.
     */
    public function getAutoIncr() {
        return $this->autoIncr;
    }

    /**
     * Set the auto incr.
     *
     * @param int $autoIncr The auto incr.
     */
    public function setAutoIncr($autoIncr) {
        $this->autoIncr = $autoIncr;
        return $this;
    }
}
