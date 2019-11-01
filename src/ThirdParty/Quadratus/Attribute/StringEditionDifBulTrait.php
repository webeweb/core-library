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
 * Edition dif bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEditionDifBulTrait {

    /**
     * Edition dif bul.
     *
     * @var string
     */
    private $editionDifBul;

    /**
     * Get the edition dif bul.
     *
     * @return string Returns the edition dif bul.
     */
    public function getEditionDifBul() {
        return $this->editionDifBul;
    }

    /**
     * Set the edition dif bul.
     *
     * @param string $editionDifBul The edition dif bul.
     */
    public function setEditionDifBul($editionDifBul) {
        $this->editionDifBul = $editionDifBul;
        return $this;
    }
}
