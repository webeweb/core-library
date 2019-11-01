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
 * i lock trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntiLockTrait {

    /**
     * i lock.
     *
     * @var int
     */
    private $iLock;

    /**
     * Get the i lock.
     *
     * @return int Returns the i lock.
     */
    public function getiLock() {
        return $this->iLock;
    }

    /**
     * Set the i lock.
     *
     * @param int $iLock The i lock.
     */
    public function setiLock($iLock) {
        $this->iLock = $iLock;
        return $this;
    }
}
