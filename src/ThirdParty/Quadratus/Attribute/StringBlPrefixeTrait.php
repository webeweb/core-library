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
 * Bl prefixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBlPrefixeTrait {

    /**
     * Bl prefixe.
     *
     * @var string
     */
    private $blPrefixe;

    /**
     * Get the bl prefixe.
     *
     * @return string Returns the bl prefixe.
     */
    public function getBlPrefixe() {
        return $this->blPrefixe;
    }

    /**
     * Set the bl prefixe.
     *
     * @param string $blPrefixe The bl prefixe.
     */
    public function setBlPrefixe($blPrefixe) {
        $this->blPrefixe = $blPrefixe;
        return $this;
    }
}
