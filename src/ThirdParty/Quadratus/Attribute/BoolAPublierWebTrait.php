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
 * A publier web trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAPublierWebTrait {

    /**
     * A publier web.
     *
     * @var bool
     */
    private $aPublierWeb;

    /**
     * Get the a publier web.
     *
     * @return bool Returns the a publier web.
     */
    public function getAPublierWeb() {
        return $this->aPublierWeb;
    }

    /**
     * Set the a publier web.
     *
     * @param bool $aPublierWeb The a publier web.
     */
    public function setAPublierWeb($aPublierWeb) {
        $this->aPublierWeb = $aPublierWeb;
        return $this;
    }
}
