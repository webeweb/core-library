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
 * Code abs fermeture chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAbsFermetureChantierTrait {

    /**
     * Code abs fermeture chantier.
     *
     * @var string
     */
    private $codeAbsFermetureChantier;

    /**
     * Get the code abs fermeture chantier.
     *
     * @return string Returns the code abs fermeture chantier.
     */
    public function getCodeAbsFermetureChantier() {
        return $this->codeAbsFermetureChantier;
    }

    /**
     * Set the code abs fermeture chantier.
     *
     * @param string $codeAbsFermetureChantier The code abs fermeture chantier.
     */
    public function setCodeAbsFermetureChantier($codeAbsFermetureChantier) {
        $this->codeAbsFermetureChantier = $codeAbsFermetureChantier;
        return $this;
    }
}
