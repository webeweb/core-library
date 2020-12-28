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
 * String from trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringFromTrait {

    /**
     * From.
     *
     * @var string|null
     */
    protected $from;

    /**
     * Get the from.
     *
     * @return string|null Returns the from.
     */
    public function getFrom(): ?string {
        return $this->from;
    }

    /**
     * Set the from.
     *
     * @param string|null $from The from.
     */
    public function setFrom(?string $from) {
        $this->from = $from;
        return $this;
    }
}
