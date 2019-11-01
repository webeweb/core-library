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
 * Nom pole emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomPoleEmploiTrait {

    /**
     * Nom pole emploi.
     *
     * @var string
     */
    private $nomPoleEmploi;

    /**
     * Get the nom pole emploi.
     *
     * @return string Returns the nom pole emploi.
     */
    public function getNomPoleEmploi() {
        return $this->nomPoleEmploi;
    }

    /**
     * Set the nom pole emploi.
     *
     * @param string $nomPoleEmploi The nom pole emploi.
     */
    public function setNomPoleEmploi($nomPoleEmploi) {
        $this->nomPoleEmploi = $nomPoleEmploi;
        return $this;
    }
}
