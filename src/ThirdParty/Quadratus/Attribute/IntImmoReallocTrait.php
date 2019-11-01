<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Immo realloc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntImmoReallocTrait {

    /**
     * Immo realloc.
     *
     * @var int
     */
    private $immoRealloc;

    /**
     * Get the immo realloc.
     *
     * @return int Returns the immo realloc.
     */
    public function getImmoRealloc() {
        return $this->immoRealloc;
    }

    /**
     * Set the immo realloc.
     *
     * @param int $immoRealloc The immo realloc.
     */
    public function setImmoRealloc($immoRealloc) {
        $this->immoRealloc = $immoRealloc;
        return $this;
    }
}
