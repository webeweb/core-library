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
 * Echelon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEchelonTrait {

    /**
     * Echelon.
     *
     * @var string
     */
    private $echelon;

    /**
     * Get the echelon.
     *
     * @return string Returns the echelon.
     */
    public function getEchelon() {
        return $this->echelon;
    }

    /**
     * Set the echelon.
     *
     * @param string $echelon The echelon.
     */
    public function setEchelon($echelon) {
        $this->echelon = $echelon;
        return $this;
    }
}
