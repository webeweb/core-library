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
 * Immo tri par service trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImmoTriParServiceTrait {

    /**
     * Immo tri par service.
     *
     * @var bool
     */
    private $immoTriParService;

    /**
     * Get the immo tri par service.
     *
     * @return bool Returns the immo tri par service.
     */
    public function getImmoTriParService() {
        return $this->immoTriParService;
    }

    /**
     * Set the immo tri par service.
     *
     * @param bool $immoTriParService The immo tri par service.
     */
    public function setImmoTriParService($immoTriParService) {
        $this->immoTriParService = $immoTriParService;
        return $this;
    }
}
