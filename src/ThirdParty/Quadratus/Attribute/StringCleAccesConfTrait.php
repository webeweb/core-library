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
 * Cle acces conf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAccesConfTrait {

    /**
     * Cle acces conf.
     *
     * @var string
     */
    private $cleAccesConf;

    /**
     * Get the cle acces conf.
     *
     * @return string Returns the cle acces conf.
     */
    public function getCleAccesConf() {
        return $this->cleAccesConf;
    }

    /**
     * Set the cle acces conf.
     *
     * @param string $cleAccesConf The cle acces conf.
     */
    public function setCleAccesConf($cleAccesConf) {
        $this->cleAccesConf = $cleAccesConf;
        return $this;
    }
}
