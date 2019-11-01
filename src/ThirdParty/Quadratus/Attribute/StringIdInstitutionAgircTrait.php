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
 * Id institution agirc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdInstitutionAgircTrait {

    /**
     * Id institution agirc.
     *
     * @var string
     */
    private $idInstitutionAgirc;

    /**
     * Get the id institution agirc.
     *
     * @return string Returns the id institution agirc.
     */
    public function getIdInstitutionAgirc() {
        return $this->idInstitutionAgirc;
    }

    /**
     * Set the id institution agirc.
     *
     * @param string $idInstitutionAgirc The id institution agirc.
     */
    public function setIdInstitutionAgirc($idInstitutionAgirc) {
        $this->idInstitutionAgirc = $idInstitutionAgirc;
        return $this;
    }
}
