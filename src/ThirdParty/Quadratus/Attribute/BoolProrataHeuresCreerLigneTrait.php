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
 * Prorata heures creer ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProrataHeuresCreerLigneTrait {

    /**
     * Prorata heures creer ligne.
     *
     * @var bool
     */
    private $prorataHeuresCreerLigne;

    /**
     * Get the prorata heures creer ligne.
     *
     * @return bool Returns the prorata heures creer ligne.
     */
    public function getProrataHeuresCreerLigne() {
        return $this->prorataHeuresCreerLigne;
    }

    /**
     * Set the prorata heures creer ligne.
     *
     * @param bool $prorataHeuresCreerLigne The prorata heures creer ligne.
     */
    public function setProrataHeuresCreerLigne($prorataHeuresCreerLigne) {
        $this->prorataHeuresCreerLigne = $prorataHeuresCreerLigne;
        return $this;
    }
}
