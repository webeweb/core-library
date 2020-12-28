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
 * String house number trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringHouseNumberTrait {

    /**
     * House number.
     *
     * @var string|null
     */
    protected $houseNumber;

    /**
     * Get the house number.
     *
     * @return string|null Returns the house number.
     */
    public function getHouseNumber(): ?string {
        return $this->houseNumber;
    }

    /**
     * Set the house number.
     *
     * @param string|null $houseNumber The house number.
     */
    public function setHouseNumber(?string $houseNumber) {
        $this->houseNumber = $houseNumber;
        return $this;
    }
}
