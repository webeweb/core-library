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
 * Chrono prefixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChronoPrefixeTrait {

    /**
     * Chrono prefixe.
     *
     * @var string
     */
    private $chronoPrefixe;

    /**
     * Get the chrono prefixe.
     *
     * @return string Returns the chrono prefixe.
     */
    public function getChronoPrefixe() {
        return $this->chronoPrefixe;
    }

    /**
     * Set the chrono prefixe.
     *
     * @param string $chronoPrefixe The chrono prefixe.
     */
    public function setChronoPrefixe($chronoPrefixe) {
        $this->chronoPrefixe = $chronoPrefixe;
        return $this;
    }
}
