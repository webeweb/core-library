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
 * Code motif rupture1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifRupture1Trait {

    /**
     * Code motif rupture1.
     *
     * @var string
     */
    private $codeMotifRupture1;

    /**
     * Get the code motif rupture1.
     *
     * @return string Returns the code motif rupture1.
     */
    public function getCodeMotifRupture1() {
        return $this->codeMotifRupture1;
    }

    /**
     * Set the code motif rupture1.
     *
     * @param string $codeMotifRupture1 The code motif rupture1.
     */
    public function setCodeMotifRupture1($codeMotifRupture1) {
        $this->codeMotifRupture1 = $codeMotifRupture1;
        return $this;
    }
}
