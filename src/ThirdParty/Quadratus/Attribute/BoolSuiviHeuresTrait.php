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
 * Suivi heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviHeuresTrait {

    /**
     * Suivi heures.
     *
     * @var bool
     */
    private $suiviHeures;

    /**
     * Get the suivi heures.
     *
     * @return bool Returns the suivi heures.
     */
    public function getSuiviHeures() {
        return $this->suiviHeures;
    }

    /**
     * Set the suivi heures.
     *
     * @param bool $suiviHeures The suivi heures.
     */
    public function setSuiviHeures($suiviHeures) {
        $this->suiviHeures = $suiviHeures;
        return $this;
    }
}
