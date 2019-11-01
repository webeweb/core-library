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
 * No cacm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoCacmTrait {

    /**
     * No cacm.
     *
     * @var string
     */
    private $noCacm;

    /**
     * Get the no cacm.
     *
     * @return string Returns the no cacm.
     */
    public function getNoCacm() {
        return $this->noCacm;
    }

    /**
     * Set the no cacm.
     *
     * @param string $noCacm The no cacm.
     */
    public function setNoCacm($noCacm) {
        $this->noCacm = $noCacm;
        return $this;
    }
}
