<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String URL trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringUrlTrait {

    /**
     * URL.
     *
     * @var string
     */
    protected $url;

    /**
     * Get the URL.
     *
     * @return string Returns the URL.
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Set the URL.
     *
     * @param string $url The URL.
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }
}
