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
 * Vnc realloc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatVncReallocTrait {

    /**
     * Vnc realloc.
     *
     * @var float
     */
    private $vncRealloc;

    /**
     * Get the vnc realloc.
     *
     * @return float Returns the vnc realloc.
     */
    public function getVncRealloc() {
        return $this->vncRealloc;
    }

    /**
     * Set the vnc realloc.
     *
     * @param float $vncRealloc The vnc realloc.
     */
    public function setVncRealloc($vncRealloc) {
        $this->vncRealloc = $vncRealloc;
        return $this;
    }
}
