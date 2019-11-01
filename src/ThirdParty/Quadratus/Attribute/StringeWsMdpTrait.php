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
 * e ws mdp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringeWsMdpTrait {

    /**
     * e ws mdp.
     *
     * @var string
     */
    private $eWsMdp;

    /**
     * Get the e ws mdp.
     *
     * @return string Returns the e ws mdp.
     */
    public function geteWsMdp() {
        return $this->eWsMdp;
    }

    /**
     * Set the e ws mdp.
     *
     * @param string $eWsMdp The e ws mdp.
     */
    public function seteWsMdp($eWsMdp) {
        $this->eWsMdp = $eWsMdp;
        return $this;
    }
}
