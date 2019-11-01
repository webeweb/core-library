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
 * Unite activite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUniteActiviteTrait {

    /**
     * Unite activite.
     *
     * @var bool
     */
    private $uniteActivite;

    /**
     * Get the unite activite.
     *
     * @return bool Returns the unite activite.
     */
    public function getUniteActivite() {
        return $this->uniteActivite;
    }

    /**
     * Set the unite activite.
     *
     * @param bool $uniteActivite The unite activite.
     */
    public function setUniteActivite($uniteActivite) {
        $this->uniteActivite = $uniteActivite;
        return $this;
    }
}
