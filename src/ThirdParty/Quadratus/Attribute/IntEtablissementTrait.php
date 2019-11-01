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
 * Etablissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEtablissementTrait {

    /**
     * Etablissement.
     *
     * @var int
     */
    private $etablissement;

    /**
     * Get the etablissement.
     *
     * @return int Returns the etablissement.
     */
    public function getEtablissement() {
        return $this->etablissement;
    }

    /**
     * Set the etablissement.
     *
     * @param int $etablissement The etablissement.
     */
    public function setEtablissement($etablissement) {
        $this->etablissement = $etablissement;
        return $this;
    }
}
