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
 * Id intervenant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdIntervenantTrait {

    /**
     * Id intervenant.
     *
     * @var string
     */
    private $idIntervenant;

    /**
     * Get the id intervenant.
     *
     * @return string Returns the id intervenant.
     */
    public function getIdIntervenant() {
        return $this->idIntervenant;
    }

    /**
     * Set the id intervenant.
     *
     * @param string $idIntervenant The id intervenant.
     */
    public function setIdIntervenant($idIntervenant) {
        $this->idIntervenant = $idIntervenant;
        return $this;
    }
}
