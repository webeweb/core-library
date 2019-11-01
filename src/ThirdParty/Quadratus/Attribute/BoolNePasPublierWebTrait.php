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
 * Ne pas publier web trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePasPublierWebTrait {

    /**
     * Ne pas publier web.
     *
     * @var bool
     */
    private $nePasPublierWeb;

    /**
     * Get the ne pas publier web.
     *
     * @return bool Returns the ne pas publier web.
     */
    public function getNePasPublierWeb() {
        return $this->nePasPublierWeb;
    }

    /**
     * Set the ne pas publier web.
     *
     * @param bool $nePasPublierWeb The ne pas publier web.
     */
    public function setNePasPublierWeb($nePasPublierWeb) {
        $this->nePasPublierWeb = $nePasPublierWeb;
        return $this;
    }
}
