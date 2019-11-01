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
 * Modif chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifChantierTrait {

    /**
     * Modif chantier.
     *
     * @var string
     */
    private $modifChantier;

    /**
     * Get the modif chantier.
     *
     * @return string Returns the modif chantier.
     */
    public function getModifChantier() {
        return $this->modifChantier;
    }

    /**
     * Set the modif chantier.
     *
     * @param string $modifChantier The modif chantier.
     */
    public function setModifChantier($modifChantier) {
        $this->modifChantier = $modifChantier;
        return $this;
    }
}
