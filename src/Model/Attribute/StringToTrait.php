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
 * String to trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringToTrait {

    /**
     * To.
     *
     * @var string|null
     */
    protected $to;

    /**
     * Get the to.
     *
     * @return string|null Returns the to.
     */
    public function getTo(): ?string {
        return $this->to;
    }

    /**
     * Set the to.
     *
     * @param string|null $to The to.
     */
    public function setTo(?string $to) {
        $this->to = $to;
        return $this;
    }
}
