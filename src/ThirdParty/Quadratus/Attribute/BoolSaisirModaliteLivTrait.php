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
 * Saisir modalite liv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisirModaliteLivTrait {

    /**
     * Saisir modalite liv.
     *
     * @var bool
     */
    private $saisirModaliteLiv;

    /**
     * Get the saisir modalite liv.
     *
     * @return bool Returns the saisir modalite liv.
     */
    public function getSaisirModaliteLiv() {
        return $this->saisirModaliteLiv;
    }

    /**
     * Set the saisir modalite liv.
     *
     * @param bool $saisirModaliteLiv The saisir modalite liv.
     */
    public function setSaisirModaliteLiv($saisirModaliteLiv) {
        $this->saisirModaliteLiv = $saisirModaliteLiv;
        return $this;
    }
}
