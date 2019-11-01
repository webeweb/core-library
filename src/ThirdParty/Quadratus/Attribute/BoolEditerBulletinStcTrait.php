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
 * Editer bulletin stc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditerBulletinStcTrait {

    /**
     * Editer bulletin stc.
     *
     * @var bool
     */
    private $editerBulletinStc;

    /**
     * Get the editer bulletin stc.
     *
     * @return bool Returns the editer bulletin stc.
     */
    public function getEditerBulletinStc() {
        return $this->editerBulletinStc;
    }

    /**
     * Set the editer bulletin stc.
     *
     * @param bool $editerBulletinStc The editer bulletin stc.
     */
    public function setEditerBulletinStc($editerBulletinStc) {
        $this->editerBulletinStc = $editerBulletinStc;
        return $this;
    }
}
