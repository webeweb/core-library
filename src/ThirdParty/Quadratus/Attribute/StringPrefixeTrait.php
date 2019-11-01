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
 * Prefixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrefixeTrait {

    /**
     * Prefixe.
     *
     * @var string
     */
    private $prefixe;

    /**
     * Get the prefixe.
     *
     * @return string Returns the prefixe.
     */
    public function getPrefixe() {
        return $this->prefixe;
    }

    /**
     * Set the prefixe.
     *
     * @param string $prefixe The prefixe.
     */
    public function setPrefixe($prefixe) {
        $this->prefixe = $prefixe;
        return $this;
    }
}
