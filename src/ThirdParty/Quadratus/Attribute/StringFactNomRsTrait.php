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
 * Fact nom rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactNomRsTrait {

    /**
     * Fact nom rs.
     *
     * @var string
     */
    private $factNomRs;

    /**
     * Get the fact nom rs.
     *
     * @return string Returns the fact nom rs.
     */
    public function getFactNomRs() {
        return $this->factNomRs;
    }

    /**
     * Set the fact nom rs.
     *
     * @param string $factNomRs The fact nom rs.
     */
    public function setFactNomRs($factNomRs) {
        $this->factNomRs = $factNomRs;
        return $this;
    }
}
