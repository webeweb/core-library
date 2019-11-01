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
 * Suivi devises trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviDevisesTrait {

    /**
     * Suivi devises.
     *
     * @var bool
     */
    private $suiviDevises;

    /**
     * Get the suivi devises.
     *
     * @return bool Returns the suivi devises.
     */
    public function getSuiviDevises() {
        return $this->suiviDevises;
    }

    /**
     * Set the suivi devises.
     *
     * @param bool $suiviDevises The suivi devises.
     */
    public function setSuiviDevises($suiviDevises) {
        $this->suiviDevises = $suiviDevises;
        return $this;
    }
}
