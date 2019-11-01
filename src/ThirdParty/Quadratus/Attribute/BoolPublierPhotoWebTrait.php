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
 * Publier photo web trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPublierPhotoWebTrait {

    /**
     * Publier photo web.
     *
     * @var bool
     */
    private $publierPhotoWeb;

    /**
     * Get the publier photo web.
     *
     * @return bool Returns the publier photo web.
     */
    public function getPublierPhotoWeb() {
        return $this->publierPhotoWeb;
    }

    /**
     * Set the publier photo web.
     *
     * @param bool $publierPhotoWeb The publier photo web.
     */
    public function setPublierPhotoWeb($publierPhotoWeb) {
        $this->publierPhotoWeb = $publierPhotoWeb;
        return $this;
    }
}
