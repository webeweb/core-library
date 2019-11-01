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
 * Flag traite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFlagTraiteTrait {

    /**
     * Flag traite.
     *
     * @var string
     */
    private $flagTraite;

    /**
     * Get the flag traite.
     *
     * @return string Returns the flag traite.
     */
    public function getFlagTraite() {
        return $this->flagTraite;
    }

    /**
     * Set the flag traite.
     *
     * @param string $flagTraite The flag traite.
     */
    public function setFlagTraite($flagTraite) {
        $this->flagTraite = $flagTraite;
        return $this;
    }
}
