<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String uid trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringUidTrait {

    /**
     * Uid.
     *
     * @var string
     */
    protected $uid;

    /**
     * Get the uid.
     *
     * @return string Returns the uid.
     */
    public function getUid() {
        return $this->uid;
    }

    /**
     * Set the uid.
     *
     * @param string $uid The uid.
     */
    public function setUid($uid) {
        $this->uid = $uid;
        return $this;
    }
}
