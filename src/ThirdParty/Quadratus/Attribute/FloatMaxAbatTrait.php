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
 * Max abat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMaxAbatTrait {

    /**
     * Max abat.
     *
     * @var float
     */
    private $maxAbat;

    /**
     * Get the max abat.
     *
     * @return float Returns the max abat.
     */
    public function getMaxAbat() {
        return $this->maxAbat;
    }

    /**
     * Set the max abat.
     *
     * @param float $maxAbat The max abat.
     */
    public function setMaxAbat($maxAbat) {
        $this->maxAbat = $maxAbat;
        return $this;
    }
}
