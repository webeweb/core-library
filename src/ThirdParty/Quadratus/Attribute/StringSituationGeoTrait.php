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
 * Situation geo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSituationGeoTrait {

    /**
     * Situation geo.
     *
     * @var string
     */
    private $situationGeo;

    /**
     * Get the situation geo.
     *
     * @return string Returns the situation geo.
     */
    public function getSituationGeo() {
        return $this->situationGeo;
    }

    /**
     * Set the situation geo.
     *
     * @param string $situationGeo The situation geo.
     */
    public function setSituationGeo($situationGeo) {
        $this->situationGeo = $situationGeo;
        return $this;
    }
}
