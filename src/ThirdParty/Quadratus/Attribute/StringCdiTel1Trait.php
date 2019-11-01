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
 * Cdi tel1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiTel1Trait {

    /**
     * Cdi tel1.
     *
     * @var string
     */
    private $cdiTel1;

    /**
     * Get the cdi tel1.
     *
     * @return string Returns the cdi tel1.
     */
    public function getCdiTel1() {
        return $this->cdiTel1;
    }

    /**
     * Set the cdi tel1.
     *
     * @param string $cdiTel1 The cdi tel1.
     */
    public function setCdiTel1($cdiTel1) {
        $this->cdiTel1 = $cdiTel1;
        return $this;
    }
}
