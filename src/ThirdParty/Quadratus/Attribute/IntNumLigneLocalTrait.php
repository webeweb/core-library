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
 * Num ligne local trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLigneLocalTrait {

    /**
     * Num ligne local.
     *
     * @var int
     */
    private $numLigneLocal;

    /**
     * Get the num ligne local.
     *
     * @return int Returns the num ligne local.
     */
    public function getNumLigneLocal() {
        return $this->numLigneLocal;
    }

    /**
     * Set the num ligne local.
     *
     * @param int $numLigneLocal The num ligne local.
     */
    public function setNumLigneLocal($numLigneLocal) {
        $this->numLigneLocal = $numLigneLocal;
        return $this;
    }
}
