<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

use DateTime;

/**
 * Date/time updated at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait DateTimeUpdatedAtTrait {

    /**
     * Updated at.
     *
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * Get the updated at.
     *
     * @return DateTime Returns the updated at.
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Set the updated at.
     *
     * @param DateTime|null $updatedAt The updated at.
     */
    public function setUpdatedAt(DateTime $updatedAt = null) {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
