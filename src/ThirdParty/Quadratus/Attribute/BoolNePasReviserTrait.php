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
 * Ne pas reviser trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePasReviserTrait {

    /**
     * Ne pas reviser.
     *
     * @var bool
     */
    private $nePasReviser;

    /**
     * Get the ne pas reviser.
     *
     * @return bool Returns the ne pas reviser.
     */
    public function getNePasReviser() {
        return $this->nePasReviser;
    }

    /**
     * Set the ne pas reviser.
     *
     * @param bool $nePasReviser The ne pas reviser.
     */
    public function setNePasReviser($nePasReviser) {
        $this->nePasReviser = $nePasReviser;
        return $this;
    }
}
