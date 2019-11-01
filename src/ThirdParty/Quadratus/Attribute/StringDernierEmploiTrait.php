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
 * Dernier emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDernierEmploiTrait {

    /**
     * Dernier emploi.
     *
     * @var string
     */
    private $dernierEmploi;

    /**
     * Get the dernier emploi.
     *
     * @return string Returns the dernier emploi.
     */
    public function getDernierEmploi() {
        return $this->dernierEmploi;
    }

    /**
     * Set the dernier emploi.
     *
     * @param string $dernierEmploi The dernier emploi.
     */
    public function setDernierEmploi($dernierEmploi) {
        $this->dernierEmploi = $dernierEmploi;
        return $this;
    }
}
