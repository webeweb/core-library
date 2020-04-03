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
     * @var string
     */
    protected $from;

    /**
     * Get the from.
     *
     * @return string Returns the from.
     */
    public function getFrom() {
        return $this->from;
    }

    /**
     * Set the from.
     *
     * @param string $from The from.
     */
    public function setFrom($from) {
        $this->from = $from;
        return $this;
    }
}
