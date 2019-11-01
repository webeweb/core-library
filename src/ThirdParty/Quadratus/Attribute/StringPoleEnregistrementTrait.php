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
 * Pole enregistrement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPoleEnregistrementTrait {

    /**
     * Pole enregistrement.
     *
     * @var string
     */
    private $poleEnregistrement;

    /**
     * Get the pole enregistrement.
     *
     * @return string Returns the pole enregistrement.
     */
    public function getPoleEnregistrement() {
        return $this->poleEnregistrement;
    }

    /**
     * Set the pole enregistrement.
     *
     * @param string $poleEnregistrement The pole enregistrement.
     */
    public function setPoleEnregistrement($poleEnregistrement) {
        $this->poleEnregistrement = $poleEnregistrement;
        return $this;
    }
}
