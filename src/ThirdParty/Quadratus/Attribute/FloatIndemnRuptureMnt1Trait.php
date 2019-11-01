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
 * Indemn rupture mnt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnRuptureMnt1Trait {

    /**
     * Indemn rupture mnt1.
     *
     * @var float
     */
    private $indemnRuptureMnt1;

    /**
     * Get the indemn rupture mnt1.
     *
     * @return float Returns the indemn rupture mnt1.
     */
    public function getIndemnRuptureMnt1() {
        return $this->indemnRuptureMnt1;
    }

    /**
     * Set the indemn rupture mnt1.
     *
     * @param float $indemnRuptureMnt1 The indemn rupture mnt1.
     */
    public function setIndemnRuptureMnt1($indemnRuptureMnt1) {
        $this->indemnRuptureMnt1 = $indemnRuptureMnt1;
        return $this;
    }
}
