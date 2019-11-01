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
 * Orphelin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOrphelinTrait {

    /**
     * Orphelin.
     *
     * @var bool
     */
    private $orphelin;

    /**
     * Get the orphelin.
     *
     * @return bool Returns the orphelin.
     */
    public function getOrphelin() {
        return $this->orphelin;
    }

    /**
     * Set the orphelin.
     *
     * @param bool $orphelin The orphelin.
     */
    public function setOrphelin($orphelin) {
        $this->orphelin = $orphelin;
        return $this;
    }
}
