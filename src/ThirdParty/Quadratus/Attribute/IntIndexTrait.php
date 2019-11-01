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
 * Index trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndexTrait {

    /**
     * Index.
     *
     * @var int
     */
    private $index;

    /**
     * Get the index.
     *
     * @return int Returns the index.
     */
    public function getIndex() {
        return $this->index;
    }

    /**
     * Set the index.
     *
     * @param int $index The index.
     */
    public function setIndex($index) {
        $this->index = $index;
        return $this;
    }
}
