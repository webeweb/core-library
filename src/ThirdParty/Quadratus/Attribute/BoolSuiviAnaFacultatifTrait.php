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
 * Suivi ana facultatif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnaFacultatifTrait {

    /**
     * Suivi ana facultatif.
     *
     * @var bool
     */
    private $suiviAnaFacultatif;

    /**
     * Get the suivi ana facultatif.
     *
     * @return bool Returns the suivi ana facultatif.
     */
    public function getSuiviAnaFacultatif() {
        return $this->suiviAnaFacultatif;
    }

    /**
     * Set the suivi ana facultatif.
     *
     * @param bool $suiviAnaFacultatif The suivi ana facultatif.
     */
    public function setSuiviAnaFacultatif($suiviAnaFacultatif) {
        $this->suiviAnaFacultatif = $suiviAnaFacultatif;
        return $this;
    }
}
