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

/**
 * Integer civility trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerCivilityTrait {

    /**
     * Civility.
     *
     * @var int
     */
    protected $civility;

    /**
     * Get the civility.
     *
     * @return int Returns the civility.
     */
    public function getCivility() {
        return $this->civility;
    }

    /**
     * Set the civility.
     *
     * @param int $civility The civility.
     */
    public function setCivility($civility) {
        $this->civility = $civility;
        return $this;
    }
}
