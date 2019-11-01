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
 * Chemin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCheminTrait {

    /**
     * Chemin.
     *
     * @var string
     */
    private $chemin;

    /**
     * Get the chemin.
     *
     * @return string Returns the chemin.
     */
    public function getChemin() {
        return $this->chemin;
    }

    /**
     * Set the chemin.
     *
     * @param string $chemin The chemin.
     */
    public function setChemin($chemin) {
        $this->chemin = $chemin;
        return $this;
    }
}
