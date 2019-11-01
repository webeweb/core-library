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
 * From fermeture chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFromFermetureChantierTrait {

    /**
     * From fermeture chantier.
     *
     * @var bool
     */
    private $fromFermetureChantier;

    /**
     * Get the from fermeture chantier.
     *
     * @return bool Returns the from fermeture chantier.
     */
    public function getFromFermetureChantier() {
        return $this->fromFermetureChantier;
    }

    /**
     * Set the from fermeture chantier.
     *
     * @param bool $fromFermetureChantier The from fermeture chantier.
     */
    public function setFromFermetureChantier($fromFermetureChantier) {
        $this->fromFermetureChantier = $fromFermetureChantier;
        return $this;
    }
}
