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
 * Code materiel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMaterielTrait {

    /**
     * Code materiel.
     *
     * @var string
     */
    private $codeMateriel;

    /**
     * Get the code materiel.
     *
     * @return string Returns the code materiel.
     */
    public function getCodeMateriel() {
        return $this->codeMateriel;
    }

    /**
     * Set the code materiel.
     *
     * @param string $codeMateriel The code materiel.
     */
    public function setCodeMateriel($codeMateriel) {
        $this->codeMateriel = $codeMateriel;
        return $this;
    }
}
