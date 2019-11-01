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
 * Indemn rupture mnt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnRuptureMnt2Trait {

    /**
     * Indemn rupture mnt2.
     *
     * @var float
     */
    private $indemnRuptureMnt2;

    /**
     * Get the indemn rupture mnt2.
     *
     * @return float Returns the indemn rupture mnt2.
     */
    public function getIndemnRuptureMnt2() {
        return $this->indemnRuptureMnt2;
    }

    /**
     * Set the indemn rupture mnt2.
     *
     * @param float $indemnRuptureMnt2 The indemn rupture mnt2.
     */
    public function setIndemnRuptureMnt2($indemnRuptureMnt2) {
        $this->indemnRuptureMnt2 = $indemnRuptureMnt2;
        return $this;
    }
}
