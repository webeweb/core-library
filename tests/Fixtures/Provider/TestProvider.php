<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Fixtures\Provider;

use Psr\Log\LoggerInterface;
use WBW\Library\Core\Provider\AbstractProvider;

/**
 * Test provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Fixtures\Provider
 */
class TestProvider extends AbstractProvider {

    /**
     * Constructor.
     *
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(LoggerInterface $logger = null) {
        parent::__construct($logger);
    }

    /**
     * {@inheritdDoc}
     */
    public function logInfo($message, array $context) {
        return parent::logInfo($message, $context);
    }
}