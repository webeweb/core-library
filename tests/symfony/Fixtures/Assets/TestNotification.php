<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Assets;

use WBW\Library\Symfony\Assets\AbstractNotification;
use WBW\Library\Symfony\Assets\NotificationInterface;

/**
 * Test notification.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Assets
 */
class TestNotification extends AbstractNotification {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("t", "c");
    }

    /**
     * {@inheritdoc}
     */
    public function setContent(string $content): NotificationInterface {
        return parent::setContent($content);
    }

    /**
     * {@inheritdoc}
     */
    public function setType(string $type): NotificationInterface {
        return parent::setType($type);
    }
}
