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
 * Code motif rupture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifRuptureTrait {

    /**
     * Code motif rupture.
     *
     * @var string
     */
    private $codeMotifRupture;

    /**
     * Get the code motif rupture.
     *
     * @return string Returns the code motif rupture.
     */
    public function getCodeMotifRupture() {
        return $this->codeMotifRupture;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string $codeMotifRupture The code motif rupture.
     */
    public function setCodeMotifRupture($codeMotifRupture) {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }
}
