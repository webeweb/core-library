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
 * Ed bul type sortie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdBulTypeSortieTrait {

    /**
     * Ed bul type sortie.
     *
     * @var string
     */
    private $edBulTypeSortie;

    /**
     * Get the ed bul type sortie.
     *
     * @return string Returns the ed bul type sortie.
     */
    public function getEdBulTypeSortie() {
        return $this->edBulTypeSortie;
    }

    /**
     * Set the ed bul type sortie.
     *
     * @param string $edBulTypeSortie The ed bul type sortie.
     */
    public function setEdBulTypeSortie($edBulTypeSortie) {
        $this->edBulTypeSortie = $edBulTypeSortie;
        return $this;
    }
}
