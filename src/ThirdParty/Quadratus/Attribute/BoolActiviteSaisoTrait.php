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
 * Activite saiso trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiviteSaisoTrait {

    /**
     * Activite saiso.
     *
     * @var bool
     */
    private $activiteSaiso;

    /**
     * Get the activite saiso.
     *
     * @return bool Returns the activite saiso.
     */
    public function getActiviteSaiso() {
        return $this->activiteSaiso;
    }

    /**
     * Set the activite saiso.
     *
     * @param bool $activiteSaiso The activite saiso.
     */
    public function setActiviteSaiso($activiteSaiso) {
        $this->activiteSaiso = $activiteSaiso;
        return $this;
    }
}
