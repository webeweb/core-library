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
 * Ed ducs type sortie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdDucsTypeSortieTrait {

    /**
     * Ed ducs type sortie.
     *
     * @var string
     */
    private $edDucsTypeSortie;

    /**
     * Get the ed ducs type sortie.
     *
     * @return string Returns the ed ducs type sortie.
     */
    public function getEdDucsTypeSortie() {
        return $this->edDucsTypeSortie;
    }

    /**
     * Set the ed ducs type sortie.
     *
     * @param string $edDucsTypeSortie The ed ducs type sortie.
     */
    public function setEdDucsTypeSortie($edDucsTypeSortie) {
        $this->edDucsTypeSortie = $edDucsTypeSortie;
        return $this;
    }
}
