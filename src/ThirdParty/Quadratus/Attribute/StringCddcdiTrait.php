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
 * Cddcdi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCddcdiTrait {

    /**
     * Cddcdi.
     *
     * @var string
     */
    private $cddcdi;

    /**
     * Get the cddcdi.
     *
     * @return string Returns the cddcdi.
     */
    public function getCddcdi() {
        return $this->cddcdi;
    }

    /**
     * Set the cddcdi.
     *
     * @param string $cddcdi The cddcdi.
     */
    public function setCddcdi($cddcdi) {
        $this->cddcdi = $cddcdi;
        return $this;
    }
}
