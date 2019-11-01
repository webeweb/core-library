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
 * Creation chantier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationChantierTrait {

    /**
     * Creation chantier.
     *
     * @var bool
     */
    private $creationChantier;

    /**
     * Get the creation chantier.
     *
     * @return bool Returns the creation chantier.
     */
    public function getCreationChantier() {
        return $this->creationChantier;
    }

    /**
     * Set the creation chantier.
     *
     * @param bool $creationChantier The creation chantier.
     */
    public function setCreationChantier($creationChantier) {
        $this->creationChantier = $creationChantier;
        return $this;
    }
}
