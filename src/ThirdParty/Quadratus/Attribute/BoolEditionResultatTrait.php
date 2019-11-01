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
 * Edition resultat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionResultatTrait {

    /**
     * Edition resultat.
     *
     * @var bool
     */
    private $editionResultat;

    /**
     * Get the edition resultat.
     *
     * @return bool Returns the edition resultat.
     */
    public function getEditionResultat() {
        return $this->editionResultat;
    }

    /**
     * Set the edition resultat.
     *
     * @param bool $editionResultat The edition resultat.
     */
    public function setEditionResultat($editionResultat) {
        $this->editionResultat = $editionResultat;
        return $this;
    }
}
