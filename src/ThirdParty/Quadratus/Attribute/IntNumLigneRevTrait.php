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
 * Num ligne rev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLigneRevTrait {

    /**
     * Num ligne rev.
     *
     * @var int
     */
    private $numLigneRev;

    /**
     * Get the num ligne rev.
     *
     * @return int Returns the num ligne rev.
     */
    public function getNumLigneRev() {
        return $this->numLigneRev;
    }

    /**
     * Set the num ligne rev.
     *
     * @param int $numLigneRev The num ligne rev.
     */
    public function setNumLigneRev($numLigneRev) {
        $this->numLigneRev = $numLigneRev;
        return $this;
    }
}
