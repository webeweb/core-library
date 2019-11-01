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
 * Autres ope total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresOpeTotalTrait {

    /**
     * Autres ope total.
     *
     * @var float
     */
    private $autresOpeTotal;

    /**
     * Get the autres ope total.
     *
     * @return float Returns the autres ope total.
     */
    public function getAutresOpeTotal() {
        return $this->autresOpeTotal;
    }

    /**
     * Set the autres ope total.
     *
     * @param float $autresOpeTotal The autres ope total.
     */
    public function setAutresOpeTotal($autresOpeTotal) {
        $this->autresOpeTotal = $autresOpeTotal;
        return $this;
    }
}
