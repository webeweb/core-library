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
 * Dernier compte frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDernierCompteFrnTrait {

    /**
     * Dernier compte frn.
     *
     * @var string
     */
    private $dernierCompteFrn;

    /**
     * Get the dernier compte frn.
     *
     * @return string Returns the dernier compte frn.
     */
    public function getDernierCompteFrn() {
        return $this->dernierCompteFrn;
    }

    /**
     * Set the dernier compte frn.
     *
     * @param string $dernierCompteFrn The dernier compte frn.
     */
    public function setDernierCompteFrn($dernierCompteFrn) {
        $this->dernierCompteFrn = $dernierCompteFrn;
        return $this;
    }
}
