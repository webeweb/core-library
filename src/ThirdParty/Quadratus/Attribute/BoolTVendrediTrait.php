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
 * T vendredi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTVendrediTrait {

    /**
     * T vendredi.
     *
     * @var bool
     */
    private $tVendredi;

    /**
     * Get the t vendredi.
     *
     * @return bool Returns the t vendredi.
     */
    public function getTVendredi() {
        return $this->tVendredi;
    }

    /**
     * Set the t vendredi.
     *
     * @param bool $tVendredi The t vendredi.
     */
    public function setTVendredi($tVendredi) {
        $this->tVendredi = $tVendredi;
        return $this;
    }
}
