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
 * Rc code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRcCodeTrait {

    /**
     * Rc code.
     *
     * @var string
     */
    private $rcCode;

    /**
     * Get the rc code.
     *
     * @return string Returns the rc code.
     */
    public function getRcCode() {
        return $this->rcCode;
    }

    /**
     * Set the rc code.
     *
     * @param string $rcCode The rc code.
     */
    public function setRcCode($rcCode) {
        $this->rcCode = $rcCode;
        return $this;
    }
}
