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
 * localisation archives trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringlocalisationArchivesTrait {

    /**
     * localisation archives.
     *
     * @var string
     */
    private $localisationArchives;

    /**
     * Get the localisation archives.
     *
     * @return string Returns the localisation archives.
     */
    public function getlocalisationArchives() {
        return $this->localisationArchives;
    }

    /**
     * Set the localisation archives.
     *
     * @param string $localisationArchives The localisation archives.
     */
    public function setlocalisationArchives($localisationArchives) {
        $this->localisationArchives = $localisationArchives;
        return $this;
    }
}
