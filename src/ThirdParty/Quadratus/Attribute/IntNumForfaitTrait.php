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
 * Num forfait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumForfaitTrait {

    /**
     * Num forfait.
     *
     * @var int
     */
    private $numForfait;

    /**
     * Get the num forfait.
     *
     * @return int Returns the num forfait.
     */
    public function getNumForfait() {
        return $this->numForfait;
    }

    /**
     * Set the num forfait.
     *
     * @param int $numForfait The num forfait.
     */
    public function setNumForfait($numForfait) {
        $this->numForfait = $numForfait;
        return $this;
    }
}
