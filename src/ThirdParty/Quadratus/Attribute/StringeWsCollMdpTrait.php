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
 * e ws coll mdp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringeWsCollMdpTrait {

    /**
     * e ws coll mdp.
     *
     * @var string
     */
    private $eWsCollMdp;

    /**
     * Get the e ws coll mdp.
     *
     * @return string Returns the e ws coll mdp.
     */
    public function geteWsCollMdp() {
        return $this->eWsCollMdp;
    }

    /**
     * Set the e ws coll mdp.
     *
     * @param string $eWsCollMdp The e ws coll mdp.
     */
    public function seteWsCollMdp($eWsCollMdp) {
        $this->eWsCollMdp = $eWsCollMdp;
        return $this;
    }
}
