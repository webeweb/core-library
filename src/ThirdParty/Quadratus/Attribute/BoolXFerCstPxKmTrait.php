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
 * X fer cst px km trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCstPxKmTrait {

    /**
     * X fer cst px km.
     *
     * @var bool
     */
    private $xFerCstPxKm;

    /**
     * Get the x fer cst px km.
     *
     * @return bool Returns the x fer cst px km.
     */
    public function getXFerCstPxKm() {
        return $this->xFerCstPxKm;
    }

    /**
     * Set the x fer cst px km.
     *
     * @param bool $xFerCstPxKm The x fer cst px km.
     */
    public function setXFerCstPxKm($xFerCstPxKm) {
        $this->xFerCstPxKm = $xFerCstPxKm;
        return $this;
    }
}
