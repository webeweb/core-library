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
 * Edition dif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionDifTrait {

    /**
     * Edition dif.
     *
     * @var bool
     */
    private $editionDif;

    /**
     * Get the edition dif.
     *
     * @return bool Returns the edition dif.
     */
    public function getEditionDif() {
        return $this->editionDif;
    }

    /**
     * Set the edition dif.
     *
     * @param bool $editionDif The edition dif.
     */
    public function setEditionDif($editionDif) {
        $this->editionDif = $editionDif;
        return $this;
    }
}
