<?php
namespace Deegitalbe\LaravelTrustupIoMessagingWebhooksListeners\Tests\Unit\Listeners;

use Deegitalbe\LaravelTrustupIoMessagingWebhooksListeners\Contracts\Listeners\ListenerContract;
use Deegitalbe\LaravelTrustupIoMessagingWebhooksListeners\Contracts\Listeners\Config\ListenToCorrespondingAppKey;

interface TestListener extends ListenerContract, ListenToCorrespondingAppKey {};