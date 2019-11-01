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
 * Prov cp cpt cap ch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProvCpCptCapChTrait {

    /**
     * Prov cp cpt cap ch.
     *
     * @var string
     */
    private $provCpCptCapCh;

    /**
     * Get the prov cp cpt cap ch.
     *
     * @return string Returns the prov cp cpt cap ch.
     */
    public function getProvCpCptCapCh() {
        return $this->provCpCptCapCh;
    }

    /**
     * Set the prov cp cpt cap ch.
     *
     * @param string $provCpCptCapCh The prov cp cpt cap ch.
     */
    public function setProvCpCptCapCh($provCpCptCapCh) {
        $this->provCpCptCapCh = $provCpCptCapCh;
        return $this;
    }
}
