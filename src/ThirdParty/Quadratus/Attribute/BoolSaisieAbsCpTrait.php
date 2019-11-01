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
 * Saisie abs cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieAbsCpTrait {

    /**
     * Saisie abs cp.
     *
     * @var bool
     */
    private $saisieAbsCp;

    /**
     * Get the saisie abs cp.
     *
     * @return bool Returns the saisie abs cp.
     */
    public function getSaisieAbsCp() {
        return $this->saisieAbsCp;
    }

    /**
     * Set the saisie abs cp.
     *
     * @param bool $saisieAbsCp The saisie abs cp.
     */
    public function setSaisieAbsCp($saisieAbsCp) {
        $this->saisieAbsCp = $saisieAbsCp;
        return $this;
    }
}
