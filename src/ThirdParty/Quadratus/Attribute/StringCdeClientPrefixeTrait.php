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
 * Cde client prefixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdeClientPrefixeTrait {

    /**
     * Cde client prefixe.
     *
     * @var string
     */
    private $cdeClientPrefixe;

    /**
     * Get the cde client prefixe.
     *
     * @return string Returns the cde client prefixe.
     */
    public function getCdeClientPrefixe() {
        return $this->cdeClientPrefixe;
    }

    /**
     * Set the cde client prefixe.
     *
     * @param string $cdeClientPrefixe The cde client prefixe.
     */
    public function setCdeClientPrefixe($cdeClientPrefixe) {
        $this->cdeClientPrefixe = $cdeClientPrefixe;
        return $this;
    }
}
