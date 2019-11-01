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
 * Non concerne is trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNonConcerneIsTrait {

    /**
     * Non concerne is.
     *
     * @var bool
     */
    private $nonConcerneIs;

    /**
     * Get the non concerne is.
     *
     * @return bool Returns the non concerne is.
     */
    public function getNonConcerneIs() {
        return $this->nonConcerneIs;
    }

    /**
     * Set the non concerne is.
     *
     * @param bool $nonConcerneIs The non concerne is.
     */
    public function setNonConcerneIs($nonConcerneIs) {
        $this->nonConcerneIs = $nonConcerneIs;
        return $this;
    }
}
