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
 * Utilise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUtiliseTrait {

    /**
     * Utilise.
     *
     * @var bool
     */
    private $utilise;

    /**
     * Get the utilise.
     *
     * @return bool Returns the utilise.
     */
    public function getUtilise() {
        return $this->utilise;
    }

    /**
     * Set the utilise.
     *
     * @param bool $utilise The utilise.
     */
    public function setUtilise($utilise) {
        $this->utilise = $utilise;
        return $this;
    }
}
