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
 * Prov cp cpt brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProvCpCptBrutTrait {

    /**
     * Prov cp cpt brut.
     *
     * @var string
     */
    private $provCpCptBrut;

    /**
     * Get the prov cp cpt brut.
     *
     * @return string Returns the prov cp cpt brut.
     */
    public function getProvCpCptBrut() {
        return $this->provCpCptBrut;
    }

    /**
     * Set the prov cp cpt brut.
     *
     * @param string $provCpCptBrut The prov cp cpt brut.
     */
    public function setProvCpCptBrut($provCpCptBrut) {
        $this->provCpCptBrut = $provCpCptBrut;
        return $this;
    }
}
