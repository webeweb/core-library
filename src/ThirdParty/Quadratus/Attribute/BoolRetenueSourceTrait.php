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
 * Retenue source trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRetenueSourceTrait {

    /**
     * Retenue source.
     *
     * @var bool
     */
    private $retenueSource;

    /**
     * Get the retenue source.
     *
     * @return bool Returns the retenue source.
     */
    public function getRetenueSource() {
        return $this->retenueSource;
    }

    /**
     * Set the retenue source.
     *
     * @param bool $retenueSource The retenue source.
     */
    public function setRetenueSource($retenueSource) {
        $this->retenueSource = $retenueSource;
        return $this;
    }
}
