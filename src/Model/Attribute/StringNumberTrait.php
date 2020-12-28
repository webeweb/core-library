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
 * String number trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringNumberTrait {

    /**
     * Number.
     *
     * @var string|null
     */
    protected $number;

    /**
     * Get the number.
     *
     * @return string|null Returns the number.
     */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Set the number.
     *
     * @param string|null $number The number.
     */
    public function setNumber(?string $number) {
        $this->number = $number;
        return $this;
    }
}
