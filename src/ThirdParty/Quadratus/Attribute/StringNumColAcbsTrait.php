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
 * Num col acbs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumColAcbsTrait {

    /**
     * Num col acbs.
     *
     * @var string
     */
    private $numColAcbs;

    /**
     * Get the num col acbs.
     *
     * @return string Returns the num col acbs.
     */
    public function getNumColAcbs() {
        return $this->numColAcbs;
    }

    /**
     * Set the num col acbs.
     *
     * @param string $numColAcbs The num col acbs.
     */
    public function setNumColAcbs($numColAcbs) {
        $this->numColAcbs = $numColAcbs;
        return $this;
    }
}
