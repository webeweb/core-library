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
 * Num ens realloc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumEnsReallocTrait {

    /**
     * Num ens realloc.
     *
     * @var int
     */
    private $numEnsRealloc;

    /**
     * Get the num ens realloc.
     *
     * @return int Returns the num ens realloc.
     */
    public function getNumEnsRealloc() {
        return $this->numEnsRealloc;
    }

    /**
     * Set the num ens realloc.
     *
     * @param int $numEnsRealloc The num ens realloc.
     */
    public function setNumEnsRealloc($numEnsRealloc) {
        $this->numEnsRealloc = $numEnsRealloc;
        return $this;
    }
}
