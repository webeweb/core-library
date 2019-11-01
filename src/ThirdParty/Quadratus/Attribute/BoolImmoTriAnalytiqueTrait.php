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
 * Immo tri analytique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImmoTriAnalytiqueTrait {

    /**
     * Immo tri analytique.
     *
     * @var bool
     */
    private $immoTriAnalytique;

    /**
     * Get the immo tri analytique.
     *
     * @return bool Returns the immo tri analytique.
     */
    public function getImmoTriAnalytique() {
        return $this->immoTriAnalytique;
    }

    /**
     * Set the immo tri analytique.
     *
     * @param bool $immoTriAnalytique The immo tri analytique.
     */
    public function setImmoTriAnalytique($immoTriAnalytique) {
        $this->immoTriAnalytique = $immoTriAnalytique;
        return $this;
    }
}
