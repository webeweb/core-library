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
 * Selection service trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSelectionServiceTrait {

    /**
     * Selection service.
     *
     * @var string
     */
    private $selectionService;

    /**
     * Get the selection service.
     *
     * @return string Returns the selection service.
     */
    public function getSelectionService() {
        return $this->selectionService;
    }

    /**
     * Set the selection service.
     *
     * @param string $selectionService The selection service.
     */
    public function setSelectionService($selectionService) {
        $this->selectionService = $selectionService;
        return $this;
    }
}
