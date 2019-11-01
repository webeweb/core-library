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
 * Autre vivtime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAutreVivtimeTrait {

    /**
     * Autre vivtime.
     *
     * @var bool
     */
    private $autreVivtime;

    /**
     * Get the autre vivtime.
     *
     * @return bool Returns the autre vivtime.
     */
    public function getAutreVivtime() {
        return $this->autreVivtime;
    }

    /**
     * Set the autre vivtime.
     *
     * @param bool $autreVivtime The autre vivtime.
     */
    public function setAutreVivtime($autreVivtime) {
        $this->autreVivtime = $autreVivtime;
        return $this;
    }
}
