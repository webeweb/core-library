<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\SkiData\Model;

use DateTime;

/**
 * SkiData card trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\SkiData\Model
 */
trait SkiDataCardTrait {

    /**
     * Blocked.
     *
     * @var boolean
     */
    private $blocked;

    /**
     * Blocked as of date.
     *
     * @var DateTime
     */
    private $blockedDate;

    /**
     * Get the blocked.
     *
     * @return bool Returns the blocked.
     */
    public function getBlocked() {
        return $this->blocked;
    }

    /**
     * Get the blocked as of date.
     *
     * @return DateTime Returns the blocked as of date.
     */
    public function getBlockedDate() {
        return $this->blockedDate;
    }

    /**
     * Set the blocked.
     *
     * @param bool $blocked The blocked.
     */
    public function setBlocked($blocked) {
        $this->blocked = $blocked;
        return $this;
    }

    /**
     * Set the blocked as of date.
     *
     * @param DateTime $blockedDate The blocked as of date.
     */
    public function setBlockedDate(DateTime $blockedDate = null) {
        $this->blockedDate = $blockedDate;
        return $this;
    }

}
