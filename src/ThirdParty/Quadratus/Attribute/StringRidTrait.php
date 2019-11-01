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
 * Rid trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRidTrait {

    /**
     * Rid.
     *
     * @var string
     */
    private $rid;

    /**
     * Get the rid.
     *
     * @return string Returns the rid.
     */
    public function getRid() {
        return $this->rid;
    }

    /**
     * Set the rid.
     *
     * @param string $rid The rid.
     */
    public function setRid($rid) {
        $this->rid = $rid;
        return $this;
    }
}
