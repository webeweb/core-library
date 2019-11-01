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
 * Cdi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiTrait {

    /**
     * Cdi.
     *
     * @var string
     */
    private $cdi;

    /**
     * Get the cdi.
     *
     * @return string Returns the cdi.
     */
    public function getCdi() {
        return $this->cdi;
    }

    /**
     * Set the cdi.
     *
     * @param string $cdi The cdi.
     */
    public function setCdi($cdi) {
        $this->cdi = $cdi;
        return $this;
    }
}
