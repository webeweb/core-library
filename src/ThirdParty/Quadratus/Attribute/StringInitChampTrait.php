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
 * Init champ trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInitChampTrait {

    /**
     * Init champ.
     *
     * @var string
     */
    private $initChamp;

    /**
     * Get the init champ.
     *
     * @return string Returns the init champ.
     */
    public function getInitChamp() {
        return $this->initChamp;
    }

    /**
     * Set the init champ.
     *
     * @param string $initChamp The init champ.
     */
    public function setInitChamp($initChamp) {
        $this->initChamp = $initChamp;
        return $this;
    }
}
