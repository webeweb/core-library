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
 * Integer maximum trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerMaximumTrait {

    /**
     * Maximum.
     *
     * @var int|null
     */
    protected $maximum;

    /**
     * Get the maximum.
     *
     * @return int|null Returns the maximum.
     */
    public function getMaximum(): ?int {
        return $this->maximum;
    }

    /**
     * Set the maximum.
     *
     * @param int|null $maximum The maximum.
     */
    public function setMaximum(?int $maximum): self {
        $this->maximum = $maximum;
        return $this;
    }
}
