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
 * Publier web trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPublierWebTrait {

    /**
     * Publier web.
     *
     * @var bool
     */
    private $publierWeb;

    /**
     * Get the publier web.
     *
     * @return bool Returns the publier web.
     */
    public function getPublierWeb() {
        return $this->publierWeb;
    }

    /**
     * Set the publier web.
     *
     * @param bool $publierWeb The publier web.
     */
    public function setPublierWeb($publierWeb) {
        $this->publierWeb = $publierWeb;
        return $this;
    }
}
