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
 * Sous type organisme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSousTypeOrganismeTrait {

    /**
     * Sous type organisme.
     *
     * @var string
     */
    private $sousTypeOrganisme;

    /**
     * Get the sous type organisme.
     *
     * @return string Returns the sous type organisme.
     */
    public function getSousTypeOrganisme() {
        return $this->sousTypeOrganisme;
    }

    /**
     * Set the sous type organisme.
     *
     * @param string $sousTypeOrganisme The sous type organisme.
     */
    public function setSousTypeOrganisme($sousTypeOrganisme) {
        $this->sousTypeOrganisme = $sousTypeOrganisme;
        return $this;
    }
}
