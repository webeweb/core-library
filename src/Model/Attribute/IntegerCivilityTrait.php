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
     * @var int|null
     */
    protected $civility;

    /**
     * Get the civility.
     *
     * @return int|null Returns the civility.
     */
    public function getCivility(): ?int {
        return $this->civility;
    }

    /**
     * Set the civility.
     *
     * @param int|null $civility The civility.
     */
    public function setCivility(?int $civility) {
        $this->civility = $civility;
        return $this;
    }
}
