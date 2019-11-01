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
 * Fait bilan trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitBilanTrait {

    /**
     * Fait bilan.
     *
     * @var string
     */
    private $faitBilan;

    /**
     * Get the fait bilan.
     *
     * @return string Returns the fait bilan.
     */
    public function getFaitBilan() {
        return $this->faitBilan;
    }

    /**
     * Set the fait bilan.
     *
     * @param string $faitBilan The fait bilan.
     */
    public function setFaitBilan($faitBilan) {
        $this->faitBilan = $faitBilan;
        return $this;
    }
}
