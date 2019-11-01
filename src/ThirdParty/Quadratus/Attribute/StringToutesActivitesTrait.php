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
 * Toutes activites trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringToutesActivitesTrait {

    /**
     * Toutes activites.
     *
     * @var string
     */
    private $toutesActivites;

    /**
     * Get the toutes activites.
     *
     * @return string Returns the toutes activites.
     */
    public function getToutesActivites() {
        return $this->toutesActivites;
    }

    /**
     * Set the toutes activites.
     *
     * @param string $toutesActivites The toutes activites.
     */
    public function setToutesActivites($toutesActivites) {
        $this->toutesActivites = $toutesActivites;
        return $this;
    }
}
