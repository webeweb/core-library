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
 * Az ga mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzGaMttTrait {

    /**
     * Az ga mtt.
     *
     * @var float
     */
    private $azGaMtt;

    /**
     * Get the az ga mtt.
     *
     * @return float Returns the az ga mtt.
     */
    public function getAzGaMtt() {
        return $this->azGaMtt;
    }

    /**
     * Set the az ga mtt.
     *
     * @param float $azGaMtt The az ga mtt.
     */
    public function setAzGaMtt($azGaMtt) {
        $this->azGaMtt = $azGaMtt;
        return $this;
    }
}
