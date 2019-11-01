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
 * Tab bord tri service trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTabBordTriServiceTrait {

    /**
     * Tab bord tri service.
     *
     * @var bool
     */
    private $tabBordTriService;

    /**
     * Get the tab bord tri service.
     *
     * @return bool Returns the tab bord tri service.
     */
    public function getTabBordTriService() {
        return $this->tabBordTriService;
    }

    /**
     * Set the tab bord tri service.
     *
     * @param bool $tabBordTriService The tab bord tri service.
     */
    public function setTabBordTriService($tabBordTriService) {
        $this->tabBordTriService = $tabBordTriService;
        return $this;
    }
}
