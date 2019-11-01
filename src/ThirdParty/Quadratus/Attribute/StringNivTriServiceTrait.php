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
 * Niv tri service trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivTriServiceTrait {

    /**
     * Niv tri service.
     *
     * @var string
     */
    private $nivTriService;

    /**
     * Get the niv tri service.
     *
     * @return string Returns the niv tri service.
     */
    public function getNivTriService() {
        return $this->nivTriService;
    }

    /**
     * Set the niv tri service.
     *
     * @param string $nivTriService The niv tri service.
     */
    public function setNivTriService($nivTriService) {
        $this->nivTriService = $nivTriService;
        return $this;
    }
}
