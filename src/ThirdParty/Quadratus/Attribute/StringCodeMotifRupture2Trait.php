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
 * Code motif rupture2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifRupture2Trait {

    /**
     * Code motif rupture2.
     *
     * @var string
     */
    private $codeMotifRupture2;

    /**
     * Get the code motif rupture2.
     *
     * @return string Returns the code motif rupture2.
     */
    public function getCodeMotifRupture2() {
        return $this->codeMotifRupture2;
    }

    /**
     * Set the code motif rupture2.
     *
     * @param string $codeMotifRupture2 The code motif rupture2.
     */
    public function setCodeMotifRupture2($codeMotifRupture2) {
        $this->codeMotifRupture2 = $codeMotifRupture2;
        return $this;
    }
}
