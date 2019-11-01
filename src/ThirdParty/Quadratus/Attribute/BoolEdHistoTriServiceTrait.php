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
 * Ed histo tri service trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdHistoTriServiceTrait {

    /**
     * Ed histo tri service.
     *
     * @var bool
     */
    private $edHistoTriService;

    /**
     * Get the ed histo tri service.
     *
     * @return bool Returns the ed histo tri service.
     */
    public function getEdHistoTriService() {
        return $this->edHistoTriService;
    }

    /**
     * Set the ed histo tri service.
     *
     * @param bool $edHistoTriService The ed histo tri service.
     */
    public function setEdHistoTriService($edHistoTriService) {
        $this->edHistoTriService = $edHistoTriService;
        return $this;
    }
}
