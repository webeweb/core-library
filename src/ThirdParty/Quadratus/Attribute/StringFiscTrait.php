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
 * Fisc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFiscTrait {

    /**
     * Fisc.
     *
     * @var string
     */
    private $fisc;

    /**
     * Get the fisc.
     *
     * @return string Returns the fisc.
     */
    public function getFisc() {
        return $this->fisc;
    }

    /**
     * Set the fisc.
     *
     * @param string $fisc The fisc.
     */
    public function setFisc($fisc) {
        $this->fisc = $fisc;
        return $this;
    }
}
