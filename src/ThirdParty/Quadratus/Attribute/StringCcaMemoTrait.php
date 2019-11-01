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
 * Cca memo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCcaMemoTrait {

    /**
     * Cca memo.
     *
     * @var string
     */
    private $ccaMemo;

    /**
     * Get the cca memo.
     *
     * @return string Returns the cca memo.
     */
    public function getCcaMemo() {
        return $this->ccaMemo;
    }

    /**
     * Set the cca memo.
     *
     * @param string $ccaMemo The cca memo.
     */
    public function setCcaMemo($ccaMemo) {
        $this->ccaMemo = $ccaMemo;
        return $this;
    }
}
