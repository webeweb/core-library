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
 * e ws srv mdp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringeWsSrvMdpTrait {

    /**
     * e ws srv mdp.
     *
     * @var string
     */
    private $eWsSrvMdp;

    /**
     * Get the e ws srv mdp.
     *
     * @return string Returns the e ws srv mdp.
     */
    public function geteWsSrvMdp() {
        return $this->eWsSrvMdp;
    }

    /**
     * Set the e ws srv mdp.
     *
     * @param string $eWsSrvMdp The e ws srv mdp.
     */
    public function seteWsSrvMdp($eWsSrvMdp) {
        $this->eWsSrvMdp = $eWsSrvMdp;
        return $this;
    }
}
