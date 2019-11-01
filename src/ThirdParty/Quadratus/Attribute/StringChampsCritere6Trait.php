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
 * Champs critere6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChampsCritere6Trait {

    /**
     * Champs critere6.
     *
     * @var string
     */
    private $champsCritere6;

    /**
     * Get the champs critere6.
     *
     * @return string Returns the champs critere6.
     */
    public function getChampsCritere6() {
        return $this->champsCritere6;
    }

    /**
     * Set the champs critere6.
     *
     * @param string $champsCritere6 The champs critere6.
     */
    public function setChampsCritere6($champsCritere6) {
        $this->champsCritere6 = $champsCritere6;
        return $this;
    }
}
