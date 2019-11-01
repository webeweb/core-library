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
 * Num sem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumSemTrait {

    /**
     * Num sem.
     *
     * @var string
     */
    private $numSem;

    /**
     * Get the num sem.
     *
     * @return string Returns the num sem.
     */
    public function getNumSem() {
        return $this->numSem;
    }

    /**
     * Set the num sem.
     *
     * @param string $numSem The num sem.
     */
    public function setNumSem($numSem) {
        $this->numSem = $numSem;
        return $this;
    }
}
