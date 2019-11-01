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
 * Code intervenant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeIntervenantTrait {

    /**
     * Code intervenant.
     *
     * @var string
     */
    private $codeIntervenant;

    /**
     * Get the code intervenant.
     *
     * @return string Returns the code intervenant.
     */
    public function getCodeIntervenant() {
        return $this->codeIntervenant;
    }

    /**
     * Set the code intervenant.
     *
     * @param string $codeIntervenant The code intervenant.
     */
    public function setCodeIntervenant($codeIntervenant) {
        $this->codeIntervenant = $codeIntervenant;
        return $this;
    }
}
